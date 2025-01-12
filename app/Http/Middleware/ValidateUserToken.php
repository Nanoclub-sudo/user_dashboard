<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserAccessToken;
use Carbon\Carbon;
use DB;
use Redirect;
use Symfony\Component\HttpFoundation\Response;

class ValidateUserToken
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('logout')) {
            return $next($request);
        }

        if (auth()->check() == false) {
            $token = $request->query('auth_token');

            if (!$token) {
                return Redirect::to(env('URL_CLA_LOGOUT'));
            }

            $userToken = UserAccessToken::where('token', $token)->first();

            if (!$userToken) {
                return Redirect::to(env('URL_CLA_LOGOUT'));
            }

            if (Carbon::parse($userToken->expires_at)->isPast()) {
                return Redirect::to(env('URL_CLA_LOGOUT'));
            }

            $user = DB::table('users')->where('id', $userToken->user_id)->first();

            if (!$user) {
                return Redirect::to(env('URL_CLA_LOGOUT'));
            }

            Auth::loginUsingId($user->id);
            return $next($request);
        }

        return $next($request);
    }
}