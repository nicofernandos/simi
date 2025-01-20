<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function PageEmpo(){
        return view('employee.empo',[
            'title' => 'Page Kelola Karyawan'
        ]);
    }

    function EditEmpo(){
        return view('employee.editEmpo',[
            'title' => 'Page Edit Data'
        ]);
    }

    function AddEmpo(){
        return view('employee.addEmpo',[
            'title' => 'Page Tambah Karyawan'
        ]);
    }
}