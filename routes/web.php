<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashDosenController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DosenRumpunController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\PengampuController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\RumpunController;
use App\Http\Controllers\TahunAkademikController;
use App\Models\DosenRumpun;
use Illuminate\Support\Facades\Route;

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

//
Route::get('/', function () {
    return redirect()->route('login.index');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'Authentic')->name('login.auth');
    Route::post('/Logout', 'Logout')->name('logout');
    Route::get('/Logout', 'Logout')->name('logout.get');
});


// Dashboard Admin
Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->middleware('only_admin')->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard.admin');
    });


    // Admin
    Route::controller(AdminController::class)->middleware('only_admin')->group(function () {
        Route::get('/admin', 'index')->name('admin.index');
        Route::post('/admin', 'store')->name('admin.store');
        Route::get('/admin/{id}/edit', 'edit')->name('admin.edit');
        Route::put('/admin/{id}/edit', 'update')->name('admin.update');
        Route::get('/admin/{id}/delete', 'destroy')->name('admin.delete');
    });

    // Dosen
    Route::controller(DosenController::class)->middleware('only_admin')->group(function () {
        Route::get('/dosen', 'index')->name('dosen.index');
        Route::post('/dosen', 'store')->name('dosen.store');
        Route::get('/dosen/{id}/edit', 'edit')->name('dosen.edit');
        Route::put('/dosen/{id}/edit', 'update')->name('dosen.update');
        Route::get('/dosen/{id}/delete', 'destroy')->name('dosen.delete');
        // export
        Route::get('users/export/', [DosenController::class, 'export']);
    });

    // Jabatan
    Route::controller(JabatanController::class)->middleware('only_admin')->group(function () {
        Route::get('/jabatan', 'index')->name('jabatan.index');
        Route::post('/jabatan', 'store')->name('jabatan.store');
        Route::get('/jabatan/{id}/edit', 'edit')->name('jabatan.edit');
        Route::put('/jabatan/{id}/edit', 'update')->name('jabatan.update');
        Route::get('/jabatan/{id}/delete', 'destroy')->name('jabatan.delete');
    });

    // Tahun Akademik
    Route::controller(TahunAkademikController::class)->middleware('only_admin')->group(function () {
        Route::get('/tahunakademik', 'index')->name('tahunakademik.index');
        Route::post('/tahunakademik', 'store')->name('tahunakademik.store');
        Route::get('/tahunakademik/{id}/edit', 'edit')->name('tahunakademik.edit');
        Route::put('/tahunakademik/{id}/edit', 'update')->name('tahunakademik.update');
        Route::get('/tahunakademik/{id}/delete', 'destroy')->name('tahunakademik.delete');
        Route::get('tahunakademik/getdata', 'getdata')->name('tahunakademik.data');
    });

    // Prodi
    Route::controller(ProdiController::class)->middleware('only_admin')->group(function () {
        Route::get('/prodi', 'index')->name('prodi.index');
        Route::post('/prodi', 'store')->name('prodi.store');
        Route::get('/prodi/{id}/edit', 'edit')->name('prodi.edit');
        Route::put('/prodi/{id}/edit', 'update')->name('prodi.update');
        Route::get('/prodi/{id}/delete', 'destroy')->name('prodi.delete');
    });

    // Mata Kuliah
    Route::controller(MatkulController::class)->middleware('only_admin')->group(function () {
        Route::get('/matakuliah', 'index')->name('matakuliah.index');
        Route::post('/matakuliah', 'store')->name('matakuliah.store');
        Route::get('/matakuliah/{id}/edit', 'edit')->name('matakuliah.edit');
        Route::put('/matakuliah/{id}/edit', 'update')->name('matakuliah.update');
        Route::get('/matakuliah/{id}/delete', 'destroy')->name('matakuliah.delete');
    });

    // Pengampu
    Route::controller(PengampuController::class)->middleware('only_admin')->group(function () {
        Route::get('/pengampu', 'index')->name('pengampu.index');
        Route::post('/pengampu', 'store')->name('pengampu.store');
        Route::get('/pengampu/{id}/edit', 'edit')->name('pengampu.edit');
        Route::put('/pengampu/{id}/edit', 'update')->name('pengampu.update');
        Route::get('/pengampu/{id}/delete', 'destroy')->name('pengampu.delete');
    });

    // Rekap Data
    Route::controller(RekapController::class)->middleware('only_admin')->group(function () {
        Route::get('/rekap', 'index')->name('rekap.index');
        Route::post('rekap/export/',  'export')->name('rekap.export');

    });

    // Rumpun Ilmu
    Route::controller(RumpunController::class)->middleware('only_admin')->group(function () {
        Route::get('/rumpunilmu', 'index')->name('rumpunilmu.index');
        Route::post('/rumpunilmu', 'store')->name('rumpunilmu.store');
        Route::put('/rumpunilmu/{id}/edit', 'update')->name('rumpunilmu.update');
        Route::get('/rumpunilmu/{id}/delete', 'destroy')->name('rumpunilmu.delete');
        // Pohon Ilmu
        Route::get('/pohonilmu', 'indexpohon')->name('pohonilmu.index');
        Route::post('/pohonilmu', 'storepohon')->name('pohonilmu.store');
        Route::put('/pohonilmu/{id}/edit', 'updatepohon')->name('pohonilmu.update');
        Route::get('/pohonilmu/{id}/delete', 'destroypohon')->name('pohonilmu.delete');

        // cabang ilmu
        Route::get('/cabangilmu', 'indexcabang')->name('cabangilmu.index');
        Route::post('/cabangilmu', 'storecabang')->name('cabangilmu.store');
        Route::put('/cabangilmu/{id}/edit', 'updatecabang')->name('cabangilmu.update');
        Route::get('/cabangilmu/{id}/delete', 'destroycabang')->name('cabangilmu.delete');
    });

    Route::controller(DosenRumpunController::class)->middleware('only_admin')->group(function () {
        // Dosen Rumpun
        Route::get('/dosenrumpun', 'index')->name('dosenrumpun.index');
        Route::post('/dosenrumpun', 'store')->name('dosenrumpun.store');
        Route::put('/dosenrumpun/{id}/edit', 'update')->name('dosenrumpun.update');
        Route::get('/dosenrumpun/{id}/delete', 'destroy')->name('dosenrumpun.delete');
    });


    // Dashboard Dosen
    Route::controller(DashDosenController::class)->middleware('only_user')->group(function () {
        Route::get('/dashboarddosen', 'index')->name('dashboard.dosen');
        // Rute untuk mengambil Pohon Ilmu berdasarkan Rumpun Ilmu
        Route::get('/api/pohonilmu/{rumpunId}', [DashDosenController::class, 'getPohonIlmu']);

        // Rute untuk mengambil Cabang Ilmu berdasarkan Pohon Ilmu
        Route::get('/api/cabangilmu/{pohonId}', [DashDosenController::class, 'getCabangIlmu']);
        Route::put('/dashboarddosen/{id}/edit', 'update')->name('dashboarddosen.update');
    });
});
