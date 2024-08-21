<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class isTamu
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            return redirect('siswa')->with('pesan', 'Kamu sudah dalam keadaan login');
        }
        return $next($request);
    }
}
