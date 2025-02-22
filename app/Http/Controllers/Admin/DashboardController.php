<?php

namespace App\Http\Controllers\admin;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;

class DashboardController extends Controller
{
    function index(){

        $user = User::all()->count();
        $task = Task::all()->count();
        $sel = Task::where('task_status','selesai')->count();
        $depart = Department::all()->count();
        return view('components.template.admin.dashboard',[
            'title' => 'Halaman Dashboard',
            'user' => $user,
            'task' => $task,
            'depart' => $depart,
            'sel' => $sel,
        ]);
    }
}