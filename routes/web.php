<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamillyController;
use App\Http\Controllers\Bukuadminsitrasidesa;
use App\Http\Controllers\PopulationController;
// use App\Http\Controllers\DependantDropdownController;
use App\Http\Controllers\PemerintahandesaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/identitas', function () {
    return view('backend.info_desa.identitas_desa.index');
});
Route::get('/wilayahadministratif', function () {
    return view('backend.info_desa.wilayah_administratif.index');
});
Route::get('/statusdesa', function () {
    return view('backend.info_desa.status_desa.index');
});
Route::get('/lembagadesa', function () {
    return view('backend.info_desa.lembaga_desa.index');
});
Route::get('/bukuadministrasidesaumum', function () {
    return view('backend.buku_administrasi_desa.umum.index');
});

Route::get('/pemerintahandesa', [PemerintahandesaController::class, 'index'])->name('pemerintahandesa.index');
Route::get('/buku_keputusan_desa', [PemerintahandesaController::class, 'buku_keputusan_desa'])->name('pemerintahandesa.buku_keputusan_desa');
//Route::get('/provinces', [DependantDropdownController::class, 'provinces'])->name('provinces');
// Route::group(['middleware' => ['auth'], 'prefix' => 'wjk', 'as' => 'wjk.'], function () {

// });

Route::resource('/populations', PopulationController::class);
Route::resource('/famillies', FamillyController::class);