<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartementController extends Controller
{
    function pageDepart(){
        return view('departemen.depart',[
            'title'=> 'Page Departemen'
        ]); 
    }
}