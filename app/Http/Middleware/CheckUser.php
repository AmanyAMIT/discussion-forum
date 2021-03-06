<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $isuser = Auth::user()->role_id;
        if($isuser == 1 || $isuser == 2)
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('home');
        }
    }
}
