<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| USER CONTROLLERS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EazyDesaController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\ProfilPemerintahanController;
use App\Http\Controllers\LayananProdukController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\TupoksiController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\PengajuanController; // USER pengajuan

/*
|--------------------------------------------------------------------------
| ADMIN CONTROLLERS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WargaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PengajuanController as AdminPengajuanController;
use App\Http\Controllers\Admin\NotifikasiController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\StrukturController;
use App\Http\Controllers\BeritaUserController;

/*
|--------------------------------------------------------------------------
| PUBLIC / USER AREA
|--------------------------------------------------------------------------
*/
Route::get('/', [EazyDesaController::class, 'index'])->name('home');


Route::get('/eazydesa', [EazyDesaController::class, 'index']);
Route::get('/profil', [EazyDesaController::class, 'profil'])->name('profil');
Route::get('/berita', [BeritaUserController::class, 'index'])->name('berita.index');


Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik');
Route::get('/profil-desa', [ProfilDesaController::class, 'index'])->name('profil.profildesa');
Route::get('/profil-pemerintahan', [ProfilPemerintahanController::class, 'index'])->name('profilpemerintahan');
Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');
Route::get('/tupoksi', [TupoksiController::class, 'index'])->name('tupoksi');
Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('strukturorganisasi');
Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');

/*
|--------------------------------------------------------------------------
| USER AUTH
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');

Route::get('/daftar', [AuthController::class, 'daftar'])->name('daftar');
Route::post('/daftar', [AuthController::class, 'daftarProcess'])->name('daftar.process');

Route::post('/logout', function () {
    Auth::guard('web')->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

/*
|--------------------------------------------------------------------------
| USER AREA (LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:web')->group(function () {

    Route::get('/layanan', [LayananProdukController::class, 'index'])
        ->name('layanan');

    Route::get('/layanan/ktp', fn () =>
        view('layananproduk.layanandesa.pengajuan_ktp')
    )->name('layanan.ktp');

    Route::get('/layanan/kk', fn () =>
        view('layananproduk.layanandesa.pengajuan_kk')
    )->name('layanan.kk');

    // SUBMIT PENGAJUAN (USER)
    Route::post('/pengajuan', [PengajuanController::class, 'store'])
        ->name('pengajuan.store');
});

/*
|--------------------------------------------------------------------------
| PENGADUAN
|--------------------------------------------------------------------------
*/
Route::post('/submit-pengaduan', [PengaduanController::class, 'submitPengaduan'])
    ->name('pengaduan.submit');

/*
|--------------------------------------------------------------------------
| ADMIN AUTH
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {

    Route::get('/login', [AuthAdminController::class, 'showLogin'])
        ->name('admin.login');

    Route::post('/login', [AuthAdminController::class, 'loginProcess'])
        ->name('admin.login.submit');

    Route::post('/logout', [AuthAdminController::class, 'logout'])
        ->name('admin.logout');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA (ADMIN ONLY)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->middleware('auth:admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/warga', [WargaController::class, 'index'])
            ->name('warga.index');

        Route::get('/users', [UserController::class, 'index'])
            ->name('users.index');

        Route::get('/pengajuan/{jenis}', [AdminPengajuanController::class, 'index'])
            ->name('pengajuan.filter');

        Route::get('/pengajuan/detail/{id}', [AdminPengajuanController::class, 'show'])
            ->name('pengajuan.detail');

        Route::put('/pengajuan/{id}/status', [AdminPengajuanController::class, 'updateStatus'])
            ->name('pengajuan.updateStatus');

        Route::get('/notifikasi', [NotifikasiController::class, 'index'])
            ->name('notifikasi.index');

        Route::get('/settings', [SettingController::class, 'index'])
            ->name('settings');

        Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');

        Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

        Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');

        Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

        Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

        Route::get('/struktur', [StrukturController::class, 'index'])->name('struktur.index');
    });


Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::resource('berita', BeritaController::class);
});

Route::get('/berita', [BeritaUserController::class, 'index']);
