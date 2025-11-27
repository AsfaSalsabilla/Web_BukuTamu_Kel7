<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password; // sama seperti PHP lama

        $user = DB::table('tuser')
            ->where('username', $username)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan session
            //Session::put('id_user', $user->id_user);
           // Session::put('username', $user->username);
           // Session::put('email', $user->email);

           // dd(Session::all());


            return redirect()->route('operator.tamu.index');
        }

        return back()->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
       // Session::flush();
        return redirect()->route('login');
    }
}
