<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    function index(){
        return view('profile.profile',[
            'title' => 'Page Profile'
        ]);
    }

    protected function validateDataProfile($request)
    {
        return Validator::make($request->all(),[
            'name' => 'required|string|min:4|max:255',
            'username' => 'required|string|min:4|max:122',
            'email' => 'required|email|unique:users,email,'.auth()->id(),
            'current_password' => 'required|string',
            'password' => 'required|min:7|confirmed|unique:users,password',
        ],[
            'name.required' => 'Nama wajib diisi.',
            'name.min' => 'Nama minimal 4 karakter',
            'username.required' => 'Username wajib diisi.',
            'email.required' =>'email wajib diisi.',
            'email.unique' => 'email sudah terdaftar.',
            'email.email' => 'email tidak valid.',
            'current_password.required' => 'Password lama wajib diisi',
            'password.min' => 'Password minimal 7 karakter',
            'password.unique' => 'Password sudah dipakai sebelumnya',
            'password.confirmed' => 'Password tidak cocok!',

        ]);
    }

    public function update(Request $request)
    {
        $validator = $this->validateProfileData($request);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = auth()->user();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
    
        // Hanya update password jika ada password baru yang diberikan
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Hash password sebelum disimpan
        }
    
        $user->save();
    
        return redirect('/profile')->with('success', 'Berhasil mengubah data profil');
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