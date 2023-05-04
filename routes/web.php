<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganisasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/ranting', function(){
    return view('Profil.ranting');
});

Route::get('/beritaa', function() {
    return view('Profil.berita');
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index_home']);

Route::get('/dashboard',[\App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/dashboard/Berita/berita', [HomeController::class, 'berita']);
Route::get('/dashboard/Profil/penjabat', [HomeController::class, 'jabatan']);
Route::get('/dashboard/Profil/organisasi', [HomeController::class, 'organisasi']);
Route::get('/dashboard/Profil/tugas', [HomeController::class, 'tugas']);

//Route::get('/dashboard',[\App\Http\Controllers\BeritaController::class, 'index'])->name('dashboard');

Route::post('/post-home',[\App\Http\Controllers\HomeController::class, 'store']);

Route::post('/post-berita',[\App\Http\Controllers\BeritaController::class, 'store']);

Route::post('/post-penjabat',[\App\Http\Controllers\JabatanController::class, 'store']);

Route::post('/post-organisasi',[\App\Http\Controllers\OrganisasiController::class, 'store']);

Route::post('/post-tugas',[\App\Http\Controllers\TugasController::class, 'store']);


Route::get('/berita',[\App\Http\Controllers\BeritaController::class, 'index'])->name('berita');