<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    function index(){
        $user = auth()->user();
        return view('profile.profile',[
            'title' => 'Page Profile',
            'user' => $user
        ]);
    }

    public function edit(){
        $user = auth()->user();
        return view('profile.edit',[
            'title' => 'Halaman Edit Profile',
            'user' => $user
        ]);
    }

    protected function validateDataProfile($request)
    {
        return Validator::make($request->all(), [
            'name' => 'required|string|min:4|max:255',
            'username' => 'required|string|min:4|max:122',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'current_password' => 'required|string',
            'password' => 'required|min:7|confirmed|unique:users,password',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.min' => 'Nama minimal 4 karakter',
            'username.required' => 'Username wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.unique' => 'Email sudah terdaftar.',
            'email.email' => 'Email tidak valid.',
            'current_password.required' => 'Password lama wajib diisi.',
            'password.min' => 'Password minimal 7 karakter',
            'password.unique' => 'Password sudah dipakai sebelumnya.',
            'password.confirmed' => 'Password tidak cocok!',
        ]);
    }

    // Fungsi untuk mengupdate profil pengguna
    public function update(Request $request)
    {
        // Validasi input
        $validator = $this->validateDataProfile($request);


        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Ambil data pengguna yang sedang login
        $user = auth()->user();

        // Update data pengguna
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->department = $request->department;
        
        if ($request->hasFile('image')) {
            // Pastikan file valid
            if ($request->file('image')->isValid()) {
                // Menyimpan file gambar ke storage
                $imagePath = $request->file('image')->store('public/images');
                $user->image = Storage::url($imagePath); // Menyimpan URL gambar
            } else {
                return redirect()->back()->withErrors(['image' => 'File gambar tidak valid!'])->withInput();
            }
        }

        // Verifikasi dan update password jika ada password baru
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Hash password sebelum disimpan
        }


        // Simpan perubahan ke database
        $user->save();

        // Kembali ke halaman utama dengan pesan sukses
        return redirect('/')->with('success', 'Berhasil mengubah data profil');
    }

//     public function update(Request $request)
//     {
//         $validator = validateDataProfile($request);

//         if($validator->fails()) {
//             return response()->json(['errors' => $validator->errors()], 422);
//         }

//         if (!Hash::check($request->current_password, $user->password)){
//             eturn response()->json(['errors' => ['current_password' => ['Password lama salah.']]], 422);
//         }
            
//         $user = auth()->user();
//         $user->name = $request->name;
//         $user->username = $request->username;
//         $user->email = $request->email;

//         if($request->filled('password')){
//             $user->password = bcrypt($request->password);
//         }
//         $user->save();
        
//         return response()->json(['message' => 'Profil berhasil diupdate'], 200);
        
//     }

}