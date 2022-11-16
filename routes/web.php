<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\DependantDropdownController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\FamillyController;
use App\Http\Controllers\BukukeputusandesaController;

use App\Http\Controllers\Bukuadminsitrasidesa;
use App\Http\Controllers\PopulationController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\PemerintahandesaController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\DependentDropdownController;
use App\Http\Controllers\Auth\ChangePasswordController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::redirect('/', 'admin/home');
Auth::routes(['register' => false]);

Route::get('change_password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('auth.change_password');
Route::patch('change_password', [ChangePasswordController::class, 'changePassword'])->name('auth.change_password');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('permissions', PermissionsController::class);
    Route::delete('permissions_mass_destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.mass_destroy');
    Route::resource('roles', RolesController::class);
    Route::delete('roles_mass_destroy', [RolesController::class, 'massDestroy'])->name('roles.mass_destroy');
    Route::resource('users', UsersController::class);
    Route::delete('users_mass_destroy', [UsersController::class, 'massDestroy'])->name('users.mass_destroy');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'siode', 'as' => 'siode.'], function () {
    Route::view('/dashboard', 'backend.info_desa.status_desa.index')->name('dashboard.index');
    Route::view('/buku-administrasi-desa-umum', 'backend.buku_administrasi_desa.umum.index')->name('bukuadministrasidesaumum');

   

    Route::group(['middleware' => ['auth'], 'prefix' => 'info-desa', 'as' => 'infodesa.'], function () {
        Route::view('/identitas-desa', 'backend.info_desa.status_desa.index')->name('identitas');
        Route::view('/wilayah-administratif-desa', 'backend.info_desa.status_desa.index')->name('wilayahadministratif');
        Route::view('/status-desa', 'backend.info_desa.status_desa.index')->name('statusdesa');
        Route::view('/lembaga-desa', 'backend.info_desa.lembaga_desa.index')->name('lembagadesa');

        
        Route::resource('/pemerintahan-desa', PemerintahandesaController::class);
        Route::resource('/buku-keputusan-desa',BukukeputusandesaController::class);
         
    });

    
    Route::group(['middleware' => ['auth'], 'prefix' => 'kependudukan', 'as' => 'kependudukan.'], function () {
        Route::resource('/penduduk', PopulationController::class);
        Route::resource('/keluarga', FamillyController::class);
        Route::view('/kk', 'backend.kependudukan.keluarga.view')->name('kk');
    });
});

//// ROUTE UNTUK DROPDOWN WILAYAH ////
Route::get('dependent-dropdown', [DependentDropdownController::class, 'index'])->name('dependent-dropdown.index');
Route::post('dependent-dropdown-city', [DependentDropdownController::class, 'store'])->name('dependent-dropdown.store.city');
Route::post('dependent-dropdown-district', [DependentDropdownController::class, 'storeDistrict'])->name('dependent-dropdown.store.district');
Route::post('dependent-dropdown-village', [DependentDropdownController::class, 'storeVillage'])->name('dependent-dropdown.store.village');



Route::get('/surat-keterangan-usaha', function () {
    return view('backend.dokumen_surat.surat_keterangan_usaha');
});
Route::get('/surat-keterangan-tidak-mampu', function () {
    return view('backend.dokumen_surat.surat_keterangan_tidak_mampu');
});