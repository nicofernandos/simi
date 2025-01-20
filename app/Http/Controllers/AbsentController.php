<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsentController extends Controller
{
    function pageAbsent(){
        return view('absensi.absenst',[
            'title' => 'Page Absensi'
        ]);
    }
}