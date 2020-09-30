<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isExpert
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
      logger('Checando si es experto...');
      logger($user->usable_type);
      $reallyExpert = strcmp($user->usable_type, "App\Expert");
      logger($reallyExpert );
      if ( $reallyExpert !== 0) {
        logger('no es un experto');
        return redirect('/');

      }

      logger('si es un experto');
      return $next($request);
    }
}
