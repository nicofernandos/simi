<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/',[AuthController::class, 'FormLogin'])->name('auth/login');
Route::post('/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register',[AuthController::class,'regist'])->name('auth.regist');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Buat halaman dashboard
    })->name('dashboard');
});

// Route::get('/',function(){
//     return view('auth.login', ['title' => 'Silahkan Login']);
// });

Route::get('/register',function(){
    return view('auth.register', ['title'=>'Daftar Akun']);
});

Route::get('/dashboard', function(){
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/fpage', function(){
    return view('fpage', ['title'=>'SIMIKA']);
});