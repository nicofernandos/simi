<?php

use App\Http\Controllers\AbsentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaskController;
use Faker\Guesser\Name;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::middleware('guest')->group(function () {
    Route::get('/',[AuthController::class, 'FormLogin'])->name('authLogin');
    Route::post('/', [AuthController::class, 'login'])->name('submitLogin');
    Route::post('/register',[AuthController::class,'regist'])->name('auth.regist');
    Route::get('/homeRegister',[AuthController::class,'pageRegister'])->name('registrasi.page');  
});

route::get('/absent',[AbsentController::class,'pageAbsent'])->name('pageAbsensi');
route::get('/reportAbs',[AbsentController::class,'pageAbsent'])->name('reportAbsent');

route::get('/depart',[DepartementController::class,'PageDepart'])->name('pageDepart');

route::get('/employes',[EmployeeController::class,'PageEmpo'])->name('pageEmpo');
route::get('/editEmpo',[EmployeeController::class,'EditEmpo'])->name('editEmpo');
route::get('/addEmpo',[EmployeeController::class,'AddEmpo'])->name('addEmpo');

route::prefix('report')->group(function (){
    route::get('/',[TaskController::class, 'index'])->name('pageTask');
    route::get('/layreport',[TaskController::class,'layTask'])->name('layTask');
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function(){
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/fpage', function(){
    return view('fpage', ['title'=>'SIMIKA']);
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('role:admin');

Route::get('/employee', function () {
    return view('employee.dashboard');
})->middleware('role:employee');