<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Course\CourseController;

Route::get('/', function () {
    return view('index');
})->name('dashboard');

Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('index');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::get('/settings', [ProfileController::class, 'settings'])->name('settings');
    Route::get('/notifications', [ProfileController::class, 'notifications'])->name('notifications');
    Route::get('/password/change', [ProfileController::class, 'changePassword'])->name('password.change');
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