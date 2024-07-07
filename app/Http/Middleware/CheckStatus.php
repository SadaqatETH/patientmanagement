<?php

namespace App\Http\Middleware;

use App\Helpers\LogActivity;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);


        //If the status is not active  logoout redirect to login page
        if(Auth::check() && Auth::user()->status != 1){
            Auth::logout();
            return redirect('/login')->with('error_login', 'Your Account is Blocked. Please contact Administrator');
        }
        return $response;
    }
}
