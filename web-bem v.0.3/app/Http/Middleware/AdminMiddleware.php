<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect('/'); // Arahkan ke halaman utama jika belum login
        }

        // Pastikan pengguna memiliki peran admin
        if (Auth::user()->is_admin) {
            return $next($request);
        }

        // Jika pengguna bukan admin, redirect ke halaman utama
        return redirect('/');
    }
}
