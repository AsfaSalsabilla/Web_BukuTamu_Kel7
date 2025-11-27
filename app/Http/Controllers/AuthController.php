<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Ambil user berdasarkan username
        $user = DB::table('tuser')->where('username', $request->username)->first();

        if ($user && md5($request->password) === $user->password) {

            // Set session login
            Session::put('id_user', $user->id_user);
            Session::put('username', $user->username);
            Session::put('email', $user->email);

            return redirect()->route('operator.tamu.index');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login')->with('success', 'Berhasil logout.');
    }
}
