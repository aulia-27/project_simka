<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\RemajaMasjidController;
use App\Http\Controllers\AnggotaMajelisController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\CeramahController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/ceramah_home', [HomeController::class, 'ceramah']);
Route::get('/anggota_majelis_home', [HomeController::class, 'anggota_majelis']);
Route::get('/kegiatan_home', [HomeController::class, 'kegiatan']);
Route::get('/remaja_masjid_home', [HomeController::class, 'remaja_masjid']);
Route::get('/pengurus_home', [HomeController::class, 'pengurus']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/postlogin', [LoginController::class, 'postlogin']);


Route::get('/dashboard', [AdminController::class, 'index']);

//pengurus
Route::get('/pengurus', [PengurusController::class, 'index']);
Route::get('/pengurus_input', [PengurusController::class, 'create']);
Route::post('/pengurus_store', [PengurusController::class, 'store']);
Route::get('/pengurus_edit/{id}', [PengurusController::class, 'show']);
Route::post('/update/{id}', [PengurusController::class, 'update']);
Route::get('/destroy/{id}', [PengurusController::class, 'destroy']);

//remajaMasjid
Route::get('/remaja_masjid', [RemajaMasjidController::class, 'index']);
Route::get('/remaja_masjid_input', [RemajaMasjidController::class, 'create']);
Route::post('/remaja_masjid_store', [RemajaMasjidController::class, 'store']);
Route::get('/remaja_masjid_edit/{id}', [RemajaMasjidController::class, 'show']);
Route::post('/update/{id}', [RemajaMasjidController::class, 'update']);
Route::get('/destroy/{id}', [RemajaMasjidController::class, 'destroy']);

//kegiatan
Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/kegiatan_input', [KegiatanController::class, 'create']);
Route::post('/kegiatan_store', [KegiatanController::class, 'store']);
Route::get('/kegiatan_edit/{id}', [KegiatanController::class, 'show']);
Route::post('/update/{id}', [KegiatanController::class, 'update']);
Route::get('/destroy/{id}', [KegiatanController::class, 'destroy']);

//anggotamajelis
Route::get('/anggota_majelis', [AnggotaController::class, 'index']);
Route::get('/anggota_majelis_input', [AnggotaController::class, 'create']);
Route::post('/store', [AnggotaController::class, 'store']);
Route::get('/anggota_majelis_edit/{id}', [AnggotaController::class, 'show']);
Route::post('/update/{id}', [AnggotaController::class, 'update']);
Route::get('/destroy/{id}', [AnggotaController::class, 'destroy']);

//ceramah
Route::get('/ceramah', [CeramahController::class, 'index']);
Route::get('/ceramah_input', [CeramahController::class, 'create']);
Route::post('/ceramah_store', [CeramahController::class, 'store']);
Route::get('/ceramah_edit/{id}', [CeramahController::class, 'show']);
Route::post('/update/{id}', [CeramahController::class, 'update']);
Route::get('/destroy/{id}', [CeramahController::class, 'destroy']);


