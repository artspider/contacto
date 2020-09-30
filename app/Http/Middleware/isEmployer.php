<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class isEmployer
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
      $user=Auth::user();
      logger('Checando si es employer...');
      logger($user->usable_type);
      $reallyEmployer = strcmp($user->usable_type, "App\Employer");
      logger($reallyEmployer );
      if ( $reallyEmployer !== 0) {
        logger('no es un employer');
        return redirect('/');

      }

      logger('si es un experto');
      return $next($request);
    }
}
