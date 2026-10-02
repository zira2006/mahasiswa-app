<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginAdmin']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home - redirect ke login jika belum auth
Route::get('/', function () {
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    $jumlahMahasiswa = Mahasiswa::where('created_by', auth()->id())->count();
    $jurusanCount = Mahasiswa::where('created_by', auth()->id())->distinct('jurusan')->count('jurusan');
    $mahasiswas = Mahasiswa::where('created_by', auth()->id())->latest()->get();

    return view('home', compact('jumlahMahasiswa', 'jurusanCount', 'mahasiswas'));
})->name('home');

// Mahasiswa Resource
Route::resource('mahasiswa', MahasiswaController::class);
