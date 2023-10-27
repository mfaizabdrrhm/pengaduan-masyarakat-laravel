<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;

Route::get('/hapus_pengaduan/{id}', [PengaduanController::class,'hapus']);
Route::get ('/detail_pengaduan/{id}', [PengaduanController::class,'detail']);

Route::get ('/update_pengaduan/{id}', [PengaduanController::class,'update']);
Route::post('/update_pengaduan/{id}', [PengaduanController::class,'proses_update']);

Route::post('register_petugas', [PetugasController::class,'table']);
Route::post('register_petugas', [PetugasController::class,'proses_registrasi_petugas']);
Route::post('register', [MasyarakatController::class,'proses_registrasi']);

Route::get('/table', [PengaduanController::class,'index']);

Route::get('/table_masyarakat', [MasyarakatController::class,'tablemas']);
Route::post('/table_masyarakat', [MasyarakatController::class,'proses_tambah_pengaduan']);

Route::get('isi_laporan', [PengaduanController::class,'tampil_laporan']);
Route::post('isi_laporan', [PengaduanController::class,'proses_tambah_pengaduan']);

Route::get('home', [PengaduanController::class,'home']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register_petugas', function () {
    return view('register_petugas');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('app', function () {
    return view('layouts.app');
});
 
Route::get('/logout', [AuthController::class, 'logout',]);




route::get('proses_update/{id}', [PetugasController::class, 'update']);
route::get('proses_hapus/{id}', [PengaduanController::class, 'hapus']);
route::get('proses_detail/{id}', [PengaduanController::class,'detail']);

Route::middleware(['auth'])->group(function(){
    
});

