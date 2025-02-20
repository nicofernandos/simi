<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class WorkController extends Controller
{
    function index(){
        $works = Task::with('user.department')->get();
        return view('components.template.work.home',[
            'title' => 'Page Data Pekerjaan',
            'works' => $works 
        ]);
    }

    function view(int $id){
        $works = Task::with('user.department')->findOrFail($id);
        return view('components.template.work.viewWork',[
            'title' => 'Detail Data Pekerjaan',
            'works' => $works
        ]);   
    }
}