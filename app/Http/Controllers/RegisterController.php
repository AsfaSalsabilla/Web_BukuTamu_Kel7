<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi
        $request->validate([
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|min:4'
        ]);

        // Cek apakah username sudah ada di tabel tuser
        $exists = DB::table('tuser')->where('username', $request->username)->first();

        if ($exists) {
            return back()->with('danger', 'Username sudah digunakan!');
        }

        // Simpan user baru
        DB::table('tuser')->insert([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password), // simpan hash!
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
