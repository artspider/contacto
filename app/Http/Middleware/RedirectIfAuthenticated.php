<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      logger("en el redirect");
        if (Auth::guard($guard)->check()) {
          $role = Auth::user()->type;
          if($role == '1')
          {
            return redirect('employer');
          }
          elseif($role == '2')
          {
            return redirect('expert');
          }
            //return redirect(RouteServiceProvider::HOME);
            //return redirect('expert');
        }

        return $next($request);
    }
}
