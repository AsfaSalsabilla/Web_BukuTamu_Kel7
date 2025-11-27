<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('homepage');
});


// Halaman login
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login-process', [LoginController::class, 'login'])->name('login.process');

Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register-process', [RegisterController::class, 'register'])->name('register.process');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
    //session()->invalidate();
    //session()->regenerateToken();
})->name('logout');


Route::prefix('operator')->group(function () {

    // Buku Tamu
    Route::get('/tamu', [TamuController::class, 'index'])->name('operator.tamu.index');
    Route::post('/tamu/store', [TamuController::class, 'storeOperator'])->name('operator.tamu.store');
    Route::get('/tamu/{id}/edit', [TamuController::class, 'edit'])->name('operator.tamu.edit');
    Route::put('/tamu/{id}', [TamuController::class, 'update'])->name('operator.tamu.update');
    Route::delete('/tamu/delete/{id}', [TamuController::class, 'destroy'])->name('operator.tamu.delete');

    // Rekap
    Route::get('/rekap', [RekapController::class, 'index'])->name('operator.rekap.index');
    Route::post('/rekap', [RekapController::class, 'filter'])->name('operator.rekap.filter');
    Route::get('/rekap/export', [RekapController::class, 'exportExcel'])->name('operator.rekap.export');

    // Pencarian berdasarkan kode unik
    Route::get('/cari', [TamuController::class, 'searchForm'])->name('operator.cari');
    Route::post('/cari', [TamuController::class, 'searchByKodeUnik'])->name('operator.cari.submit');
});

// Halaman Buku Tamu (Pengguna)
Route::get('/buku-tamu', [TamuController::class, 'create'])->name('tamu.create');
Route::post('/buku-tamu', [TamuController::class, 'store'])->name('tamu.store');

Route::get('/buku-tamu/success', function () {
    return view('tamu.success');
})->name('tamu.success');


// halaman admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/inbox', [AdminController::class, 'inbox'])->name('admin.inbox');
    Route::delete('/user/{id}', [AdminController::class, 'destroyUser'])->name('admin.user.destroy');
});
