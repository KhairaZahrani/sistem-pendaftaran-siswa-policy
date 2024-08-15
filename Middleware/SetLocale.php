<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // Cek apakah ada locale di URL dan set locale tersebut
        $locale = $request->segment(3); // Mengambil segmen ke-3 dari URL
        if (in_array($locale, ['en', 'id'])) {
            app()->setLocale($locale);
            session(['locale' => $locale]);
        }
        
        return $next($request);
    }
}
