<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CobaMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (time() % 2 == 0) {
           return redirect('/tabel-mahasiswa');
       }
       return $next($request);
   }
}
