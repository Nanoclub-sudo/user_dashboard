<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserAccessToken;
use Illuminate\Support\Facades\Validator;
use App\Http\Middleware\ValidateUserToken;
use Illuminate\Support\Facades\Auth;

Route::get('clientarea/login',function(){
    return redirect('/login');
});

Route::get('loginUsingId/{id}',function($id){
    Auth::loginUsingId($id);
});

Route::get('/login', function () {
    if(auth()->check()){
        DB::table('user_access_tokens')->where('user_id', auth()->user()->id)->delete();

        auth()->logout();
    }

    return view('auth.login');
})->name('login');

Route::post('/do/login', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

//    if(!auth()->check()) {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->has('remember');

        $credentials = [
            'email' => $email,
            'password' => $password,
        ];

        if (Auth::attempt($credentials, $request->has('remember'))) {
            if (auth()->check()) {
                $user = Auth::user();

                $user->last_login = date('Y-m-d H:i:s');
                $user->save();

                try {
                    $userId = $user->id;
                    $url = rtrim(env('URL_FRONT'), '/') . "/api/log-user-in/{$userId}";

                    $client = new \GuzzleHttp\Client();
                    $response = $client->get($url);

                    // Optionally handle response if needed
                    if ($response->getStatusCode() !== 200) {
                        \Log::warning("Failed to notify front-end login for user ID {$userId}");
                    }
                } catch (\Exception $e) {
                    \Log::error("Error calling front-end login API: " . $e->getMessage());
                }

                $token = bin2hex(random_bytes(32));

                $expiresAt = now()->addMinutes(60);
                $unixExpiry = $expiresAt->timestamp;

                $existingToken = UserAccessToken::where('user_id', $user->id)->first();

                if ($existingToken) {
                    $existingToken->delete();
                }

                DB::table('user_access_tokens')->insert([
                    'user_id' => $user->id,
                    'token' => $token,
                    'expires_at' => $expiresAt,
                    'unix_expiry_timestamp' => $unixExpiry,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $panelUrl = env('URL_PANEL');
                $fullUrl = $panelUrl . "?auth_token=" . urlencode($token);

                return redirect($fullUrl);
            } else {
                dd("Something went wrong, try again later");
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
//    }
})->name('login.do');

Route::middleware([ValidateUserToken::class])->group(function () {
    Route::get('/', function () {
        $userCoursesCount = DB::table('course_registrations')->where('user_id',auth()->user()->id)->count();
        $coursesNum = DB::table('courses')->where('is_active',1)->count();
        $episodesNum = DB::table('episodes')->where('show_status',1)->count();

        return view('index', compact('userCoursesCount','coursesNum','episodesNum'));
    })->name('dashboard');

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::put('/edit/update', [ProfileController::class, 'update'])->name('update');
        Route::get('/settings', [ProfileController::class, 'settings'])->name('settings');
        Route::put('/apply/settings', [ProfileController::class, 'applySettings'])->name('apply');
        Route::get('/security', [ProfileController::class, 'security'])->name('security');
        Route::put('/adjust/security', [ProfileController::class, 'adjustSecurity'])->name('adjust');
        Route::get('/notifications', [ProfileController::class, 'notifications'])->name('notifications');
        Route::put('/set/notifications', [ProfileController::class, 'setNotifications'])->name('set');
        Route::get('/password', [ProfileController::class, 'password'])->name('password');
        Route::put('/change/password', [ProfileController::class, 'changePassword'])->name('change');
        Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');
    });

    Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('/show/{slug}', [CourseController::class, 'show'])->name('show');
        Route::get('/registered_courses', [CourseController::class, 'enrolled'])->name('enrolled');
        Route::get('/progress', [CourseController::class, 'progress'])->name('progress');
    });


    Route::get('/logout', function () {
        \DB::table('user_access_tokens')->where('user_id',auth()->user()->id)->delete();

        Auth::logout(auth()->user());

        Http::post(env('URL_FRONT').'/api/logout', [
            'user_id' => auth()->id(),
        ]);

        return redirect('/clientarea/login')->with('error','Your session has expired. Please login again.');
    })->name('logout');
});
