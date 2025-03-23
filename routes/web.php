<?php

use Faker\Guesser\Name;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbsentController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ProfileController;
use SebastianBergmann\CodeUnit\FunctionUnit;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\DepartementController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Employee\TaskEmpoController;
use App\Http\Controllers\Manager\ManagerController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/',[AuthController::class, 'index'])->name('authLogin');
Route::post('/', [AuthController::class, 'login'])->name('submitLogin');
Route::get('/register',[AuthController::class,'pageRegister'])->name('registrasi.page');  
Route::post('/register',[AuthController::class,'regist'])->name('auth.regist');

// route::prefix('absent')->middleware('auth')->group(function(){
//     route::get('/',[AbsentController::class,'pageAbsent'])->name('pageAbsensi');
//     route::get('/reportAbs',[AbsentController::class,'pageAbsent'])->name('reportAbsent');
// });

Route::get('/empo', function () {
    return view('dashboard')->name('dashboard');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/testing',[AuthController::class,'test'])->middleware('role:employee')->name('test');


Route::get('/fpage', function(){
    return view('fpage', ['title'=>'SIMIKA']);
});



// Route::get('/employee', function () {
//     return view('employee.dashboard');
// })->middleware('role:employee');

Route::middleware('auth')->group(function () {

    Route::prefix('admin')->middleware('role:admin')->group(function () {

        Route::get('/admin', function () {
            return view('admin.dashboard');
        });
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/', [TaskController::class, 'index'])->name('pageTask');
        Route::get('/kelolaPekerjaan', [TaskController::class, 'index'])->name('kelola_Pekerjaan');
        Route::get('/tambahPekerjaan', [TaskController::class, 'tambahKerja'])->name('tambahKerja');
        Route::post('/tambahPekerjaan', [TaskController::class, 'store'])->name('task.store');
        Route::get('/editPekerjaan/{id}',[TaskController::class,'editTask'])->name('editTask');
        Route::put('/editPekerjaan/{id}',[TaskController::class,'update'])->name('updateTask');
        Route::delete('/deleteTask/{id}',[TaskController::class,'destroy'])->name('delete');
        Route::get('/detailPekerjaan/{id}', [TaskController::class, 'detailTask'])->name('detailPekerjaan');
        Route::get('/tasks', [TaskController::class, 'kelolaTask'])->name('kelola_task');
        Route::get('/reportTask', [TaskController::class, 'repTask'])->name('repTask');
        Route::get('/addDepart',[DepartementController::class,'add'])->name('addDepart');
        Route::resource('/departement', DepartementController::class)->except(['show']);
        Route::get('/employe', [EmployeeController::class, 'index'])->name('employe');
        Route::get('/addEmpo',[EmployeeController::class,'AddEmpo'])->name('AddEmpo');
        Route::post('/addEmpo',[EmployeeController::class,'TambahEmpo'])->name('TambahEmpo');
        Route::get('/edit/{id}',[EmployeeController::class,'editEmpo'])->name('editEmpo');
        Route::put('/edit/{id}',[EmployeeController::class,'update'])->name('updateEmpo');
        Route::get('/views/{id}',[EmployeeController::class,'viewEmpo'])->name('viewEmpo');
        Route::delete('/delete/{id}',[EmployeeController::class,'destroy'])->name('destroy');
        Route::get('/work', [WorkController::class, 'index'])->name('work');
        Route::get('/viewWork/{id}',[WorkController::class, 'view'])->name('viewWork');
        Route::get('/report', [ReportController::class, 'index'])->name('report');
        Route::get('/report/pdf', [ReportController::class,'generatePDF'])->name('reportGeneratePDF');
        
        
    });
    Route::prefix('empo')->middleware('role:employee')->group( function(){
        Route::get('/',[TaskEmpoController::class,'index'])->name('empoDash');
        Route::get('/task',[TaskEmpoController::class,'task'])->name('empoTask');
        Route::get('/update',[TaskEmpoController::class,'view'])->name('update');
        Route::get('/show/{id}',[TaskEmpoController::class,'show'])->name('show');
        Route::put('/edit/{id}',[TaskEmpoController::class,'update'])->name('edit');
        Route::get('/data',[TaskEmpoController::class,'dataTask'])->name('data');
        Route::get('/detail/{id}',[TaskEmpoController::class,'detail'])->name('detail');
        Route::get('/reportTask',[TaskEmpoController::class,'report'])->name('reportTask');
    });

    Route::prefix('manager')->middleware('role:manager')->group(function(){
        Route::get('/',[ManagerController::class,'index'])->name('dashMan');
        Route::get('/report',[ManagerController::class,'report'])->name('reportMan');
        Route::get('/report/pdf',[ManagerController::class,'reportGenerate'])->name('reportPDFMan');
        Route::get('/depart',[ManagerController::class,'depart'])->name('depart');
        Route::get('/empo',[ManagerController::class,'empo'])->name('empo');
    });

    // route::prefix('employes')->middleware('role:admin')->group(function (){
    //     route::get('/',[EmployeeController::class,'index'])->name('pageEmpo');
    //     route::get('/editEmpo',[EmployeeController::class,'EditEmpo'])->name('editEmpo');
    //     route::get('/addEmpo',[EmployeeController::class,'AddEmpo'])->name('addEmpo');
    //     route::get('/test',[EmployeeController::class,'Testing'])->name('Testing');
    // });
    
    route::prefix('profile')->middleware('auth')->group( function(){
        route::get('/',[ProfileController::class,'index'])->name('pageProfile');
        Route::get('/profile/edit',[ProfileController::class,'edit'])->name('editProfile');
        route::put('/profile',[ProfileController::class,'update'])->name('updateProfile');
    
    });
    
    

});