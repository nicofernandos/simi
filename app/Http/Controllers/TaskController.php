<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index(){
        return view('task.workrep',[
            'title' => 'Page Task'
        ]);
    }

    function layTask(){
        return view('task.layrep',[
            'title' => 'Laporan Kerja '
        ]);
    }


}