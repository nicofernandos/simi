<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Database\Seeders\DepartementSeeder;
use Illuminate\Validation\Rule;

class DepartementController extends Controller
{

    function index(){
        
        $departments = Department::all();
        return view('components.template.departement.home',[
            'title' => 'Halaman Departement',
            'departments' => $departments
        ]);
    }

    function add(){
        return view('components.template.departement.addDepart',[
            'title' => 'Halaman tambah departement'
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validasi = $request->validate([
            'no_id' => 'required|integer',
            'name' => 'required|string|unique:departments,name',
            'description' => 'nullable|string',
        ]);
    
        try {
            // Simpan data ke database
            Department::create($validasi);
    
            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('departement.index')->with('success', 'Department berhasil ditambahkan!');
        } catch (\Exception $e) {
            // Jika terjadi error, kembali ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan department: ' . $e->getMessage());
        }
    }

    public function show(Department $department)
    {
        return view('components.template.departement.show', [
            'title' => 'Detail Departement',
            'department' => $department
        ]);
    }

    public function edit(int $id)
    {
        $department = Department::findOrFail($id); // Menggunakan findOrFail agar error lebih jelas jika tidak ditemukan
    
        return view('components.template.departement.editDepart', [
            'title' => 'Halaman Edit Departement',
            'department' => $department
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        
        if (!$department) {
            return redirect()->back()->with('error', 'Departement tidak ditemukan!');
        }
    
        $validasi = $request->validate([
            'no_id' => 'required|integer',
            'name' => ['required', 'string', Rule::unique('departments', 'name')->ignore($department->id)],
            'description' => 'nullable|string'
        ]);
    
        try {
    
            // Update data department
            $department->update($validasi);
    
            return redirect()->route('departement.index')->with('success', 'Departement berhasil diupdate!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Departement gagal update! Error: ' . $e->getMessage());
        }
    }

    public function destroy(int $id){
        $department = Department::find($id);
        $department->destroy($id);
        return redirect()->route('departement.index')->with('success','Departement berhasil dihapus!');
    }

    function pageDepart(){
        return view('departemen.depart',[
            'title'=> 'Page Departemen'
        ]); 
    }

}