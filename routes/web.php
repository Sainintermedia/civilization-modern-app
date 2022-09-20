<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopulationController;

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


// Route::group(['middleware' => ['auth'], 'prefix' => 'wjk', 'as' => 'wjk.'], function () {

// });

Route::resource('/populations', PopulationController::class);