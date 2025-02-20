<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthcheckMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check()) {
            // Memeriksa apakah role pengguna sesuai
            if (Auth::user()->role !== $role) { 
                return redirect()->route('authLogin')->with('error', 'Access Denied: You are not authorized to access this page.');
            } else {
                return $next($request);
            }
        }

        // Jika pengguna tidak login, redirect ke halaman login
        return redirect()->route('authLogin')->with('error', 'Please login to access this page.');
    }
}