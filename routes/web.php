<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EazyDesaController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\ProfilPemerintahanController;
use App\Http\Controllers\LayananProdukController;

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

Route::get('/', function () {
    return view('eazydesa');
});

Route::get('/eazydesa', [App\Http\Controllers\EazyDesaController::class, 'index']);
Route::get('/profil', [EazyDesaController::class, 'profil'])->name('profil');

/*
Route::get('/statistik', function () {
    return view('statistik');
})->name('statistik');

Route::get('/statistik', function () {
    $desa = [
        'nama' => 'Desa Lohbener'
    ];

    return view('statistik', compact('desa'));
});

*/


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('loginProcess');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/daftar', [AuthController::class, 'daftar'])->name('daftar');
Route::post('/daftar', [AuthController::class, 'daftarProcess'])->name('daftarProcess');



Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik');
Route::get('/profil-desa', [ProfilDesaController::class, 'index'])->name('profildesa');
Route::get('/profil-pemerintahan', [ProfilPemerintahanController::class, 'index'])->name('profilpemerintahan');

Route::middleware(['auth'])->group(function () {
    Route::get('/layanan', [LayananProdukController::class, 'index'])->name('layanan');
});



