<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Helpers\ImageHelper;

class RegisterController extends Controller
{
    public function registerUser()
    {
        return view('backend.v_pendaftaran.register', [
            'judul' => 'Register',
        ]);
    }
    public function createUser(Request $request)
    {
        
          $validatedData = $request->validate([
            'email' => 'required|max:255|email|unique:user',
            
            'nama' => 'required|max:255',
            'hp' => 'required|min:10|max:13',
            'password' => 'required|min:4|confirmed',
            'foto' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
        ], $messages = [
            'foto.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'foto.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.'
        ]);
        $validatedData['status'] = 0;
        $validatedData['role'] = 3;
        // Proses upload foto jika ada
       // password
        $password = $request->input('password');
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/';
        // huruf kecil ([a-z]), huruf besar ([A-Z]), dan angka (\d) (?=.*[\W_]) simbol karakter (non-alphanumeric)
        if (preg_match($pattern, $password)) {
            $validatedData['password'] = Hash::make($validatedData['password']);
            User::create($validatedData, $messages);
            return redirect()->route('backend.register')->with('success', 'Data berhasil tersimpan');
        } else {
            return redirect()->back()->withErrors(['password' => 'Password harus terdiri dari kombinasi huruf besar, huruf kecil, angka, dan simbol karakter.']);
        }
    
    }
     public function createUser123(Request $request)
    {
        
       $messages = [
        'foto.image' => 'Format gambar harus jpeg, jpg, png, atau gif.',
        'foto.max' => 'Ukuran gambar maksimal 1MB.',
    ];

    $validatedData = $request->validate([
        'nama'     => 'required|max:255',
        'email'    => 'required|email|max:255|unique:user',
        'hp'       => 'required|min:10|max:13',
        'password' => 'required|min:4|confirmed',
        'foto'     => 'nullable|image|mimes:jpeg,jpg,png,gif|max:1024',
    ], $messages);
    $validatedData['status'] = 0;
   
    // Proses upload foto jika ada
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('foto-user', 'public');
        $validatedData['foto'] = $fotoPath;
    }

    // Simpan user
    $user = new \App\Models\User();
    $user->nama    = $validatedData['nama'];
    $user->email    = $validatedData['email'];
    $user->role    = $validatedData['role']=2;
    $user->status    = $validatedData['status'];
    $user->hp       = $validatedData['hp'];
    $user->password = bcrypt($validatedData['password']);
    $user->foto     = $validatedData['foto'] ?? null;
    $user->save();

    return redirect()->route('backend.register')->with('success', 'User berhasil didaftarkan!');
    
    }
} 

