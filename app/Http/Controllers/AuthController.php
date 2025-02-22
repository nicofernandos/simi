<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Import model User
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    //view halaman depan login
    public function index()
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

        if ($user->role === 'admin') {
            return redirect()->route('pageTask');
        } elseif ($user->role === 'employee') {
            return redirect()->route('empoDash');
        } elseif($user->role === 'manager'){
            return redirect()->route('dashMan');
        }

        redirect()->back()->with('error', 'Access Denied: You are not authorized to access this page.');
    }

    function pageRegister(){
        return view('auth.register',['title' => 'Halaman register']);
    }

    public function regist(Request $request)
    {
        // Validasi form input
        $validateData = $request->validate([
            'name' => 'required|string|min:4|max:255',
            'username' => 'required|string|min:4|max:122',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|confirmed',
        ]);
    
        try {
            // Mendaftar pengguna baru
            $user = User::create([
                'name' => $validateData['name'],
                'username' => $validateData['username'],
                'email' => $validateData['email'],
                'password' => Hash::make($validateData['password']),
                'role' => 'employee',
                'status_role' => 'pen',
                'department_id' => 1,
                'image' => 'default.jpg',
            ]);

            // Login pengguna setelah registrasi
            auth()->login($user);
    
            // Redirect dengan pesan sukses
            return redirect()->route('authLogin')->with('success', 'Akun berhasil dibuat!');
        } catch (\Exception $e) {
            // Menangani kesalahan jika ada
            return redirect()->route('authLogin')->with('error', 'Terjadi kesalahan saat mendaftar.')->withInput();
        }
    }
    

    // public function dashboard()
    // {
    //     if (auth()->user()->role === 'admin') {
    //         return view('admin.dashboard');
    //     } elseif (auth()->user()->role === 'employee') {
    //         return view('employee.dashboard');
    //     }

    //     abort(403, 'Unauthorized action.');
    // }

    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('authLogin');
    }

}