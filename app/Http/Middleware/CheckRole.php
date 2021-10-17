<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        //Check user if Admin go to admin panel if not return him to index
        $isadmin = Auth::user()->role_id;
        if($isadmin == 2)
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('home');
        }
    }
}
