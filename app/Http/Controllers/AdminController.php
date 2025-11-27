<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Halaman index admin
    public function index()
    {
        $totalUsers = DB::table('tuser')->count();
        $totalInbox = DB::table('messages')->count();
        $users = DB::table('tuser')->orderBy('id_user', 'asc')->get();

        return view('admin.index', compact('totalUsers', 'totalInbox', 'users'));
    }

    // Halaman inbox
    public function inbox()
    {
        $messages = DB::table('messages')->orderBy('created_at', 'desc')->get();
        return view('admin.inbox', compact('messages'));
    }

    public function users()
    {
        $users = DB::table('tuser')->orderBy('id_user', 'asc')->get();
        return view('admin.users', compact('users'));
    }

    public function destroyUser($id)
    {
        DB::table('tuser')->where('id_user', $id)->delete();
        return redirect()->route('admin.index')->with('success', 'User berhasil dihapus');
    }
}
