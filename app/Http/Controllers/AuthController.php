<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Import model User
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class AuthController extends Controller
{

    //view halaman depan login
    public function FormLogin()
    {
        return view('auth.login',
    [
        'title' => 'Silahkan Login'
    ]);
    }

    //proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Cari user berdasarkan email
        $user = \App\Models\User::where('email', $request->email)->first();
    
        if (!$user) {
            // Jika email tidak ditemukan
            return back()->withErrors([
                'email' => 'Email tidak terdaftar.',
            ])->withInput();
        }
    
        // Coba autentikasi
        if (!Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Jika password salah
            return back()->withErrors([
                'password' => 'Password salah.',
            ])->withInput();
        }
    
        // Jika berhasil login, redirect ke dashboard
        return redirect()->intended('/dashboard');
    }

    public function regist(Request $request)
    {
        //validasi form input
        $validateData = $request->validate([
            'name' => 'required|string|min:4|max:255',
            'username' => 'required|string|min:4|max:122',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|confirmed',
        ]);
        
        //register
        $user = User::create([
            'name' => $validateData['name'],
            'username' => $validateData['username'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
            'role' => 'employee',
            'status_role' => 'pen',
            'department_id' => 1,
        ]);


        auth()->login($user);

        return redirect()->intended('/')->with('succes','Akun berhasil dibuat!');
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }



}