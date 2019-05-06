<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class AdminLogin
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
        if (Auth::check()){
            $user = Auth::user();
            if ($user->role == 1 || $user->role == 0){
                return $next($request);
            } elseif ($user->role == 2) {
                return redirect('home');
            }
        } else {
            return redirect('admin/login');
        }
    }
}
