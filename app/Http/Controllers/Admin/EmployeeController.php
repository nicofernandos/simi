<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    function index(){
        $employee = User::with('department')->get();
        return view('components.template.employe.home',[
            'title' => 'Page Kelola Karyawan',
            'employee' => $employee
        ]);
    }

    function AddEmpo(){
        $depart = Department::all();
        return view('components.template.employe.addEmpo',[
            'title' => 'Page Tambah Karyawan',
            'depart' => $depart
        ]);
    }

    function TambahEmpo(Request $request){
        $validasi = $request->validate([
            'name' => 'required|string|min:4',
            'username' => 'required|string|min:4|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:admin,employee',
            'password' => 'required|min:7|confirmed',
            'department_id' => 'required|exists:departments,id',
        ]);

        try{
            $user = User::create([
                'name' => $validasi['name'],
                'username' => $validasi['username'],
                'email' => $validasi['email'],
                'role' => $validasi['role'],
                'password' =>Hash::make($validasi['password']),
                'department_id' => $validasi['department_id'],
                'status_role' => 'acc',
            ]);

            return redirect()->route('addEmpo')->with('success', 'Berhasil menambahkan karyawan');
        }
        catch (\Exception $e) {
            // Jika terjadi error, kembali ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan Karyawan: ' . $e->getMessage());
        }
    }

    public function editEmpo($id)
    {
        $depart = Department::all();
        $employee = User::with('department')->findOrFail($id);
    
        return view('components.template.employe.editEmpo', [
            'title' => 'Halaman Edit Data',
            'employee' => $employee,
            'depart' => $depart
        ]);
    }

    public function update(Request $request,$id){
        $employee = User::with('department')->findOrFail($id);

        if (!$employee) {
            return redirect()->back()->with('error', 'Karyawan tidak ditemukan !');
        }

        $validasi = $request->validate([
            'name' => 'required|string|min:4',
            'username' => 'required|string|min:4|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:admin,employee',
            'department_id' => 'required|exists:departments,id',
        ]);

        $employee->update([
        'name' => $validasi['name'],
        'username' => $validasi['username'],
        'email' => $validasi['email'],
        'role' => $validasi['role'],
        'department_id' => $validasi['department_id'],
    ]);
    return redirect()->route('employe')->with('success', 'Karyawan berhasil diperbarui!');

    }
    
    function viewEmpo(int $id){
        $employee = User::with('department')->findOrFail($id);

        return view('components.template.employe.views',[
            'title' => 'Page Informasi Data',
            'employee' => $employee
        ]);
    }

    public function destroy(int $id){
        $employee = User::with('department')->findOrFail($id);
        $employee->destroy($id);
        return redirect()->route('employe')->with('success','Karyawan berhasil dihapus!');
    }

}