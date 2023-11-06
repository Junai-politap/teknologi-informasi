<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('template/admin');
// });


Route::prefix('admin')->group(function(){
    include "_/admin.php";
});


Route::group(['middleware' => 'auth:mahasiswa'], function () {

    Route::get('mahasiswa-page', [MahasiswaController::class, 'index']);
    Route::get('profil', [MahasiswaController::class, 'profil']);
    Route::put('update-profil/{id}', [MahasiswaController::class, 'update']);


    Route::get('tracer-study', [MahasiswaController::class, 'tracer']);
    Route::get('tracer-study-form-ii', [MahasiswaController::class, 'formTwo']);
    Route::get('tracer-study-form-iii', [MahasiswaController::class, 'form3']);
    Route::get('tracer-study-form-iv', [MahasiswaController::class, 'form4']);
    Route::get('tracer-study-form-v', [MahasiswaController::class, 'form5']);


    Route::post('store-form-I', [MahasiswaController::class, 'tracerForm_I']);
    Route::post('store-form-II', [MahasiswaController::class, 'tracerForm_II']);
    Route::post('store-form-III', [MahasiswaController::class, 'tracerForm_III']);
    Route::post('store-form-IV', [MahasiswaController::class, 'tracerForm_IV']);
    Route::post('store-form-V', [MahasiswaController::class, 'tracerForm_V']);
});



Route::get('/', [HomeController::class, 'index']);
Route::get('prodi', [HomeController::class, 'prodi']);
Route::get('profil-dosen', [HomeController::class, 'dosen']);
Route::get('profil-pimpinan', [HomeController::class, 'pimpinan']);
Route::get('profil-staff', [HomeController::class, 'staff']);
Route::get('profil-lulusan', [HomeController::class, 'lulusan']);
Route::get('visi-misi', [HomeController::class, 'visimisi']);

Route::get('akreditasi', [HomeController::class, 'akreditasi']);
Route::get('kurikulum', [HomeController::class, 'kurikulum']);

Route::get('berita', [HomeController::class, 'indexberita']);
Route::get('berita-show/{id}', [HomeController::class, 'showberita']);

Route::get('/show-pelayanan/{id}', [HomeController::class, 'showpelayanan']);


Route::get('fasilitas/{jenis_fasilitas}', [HomeController::class, 'showJenisFasilitas']);
Route::get('detail-fasilitas/{fasilitas}', [HomeController::class, 'showFasilitas']);

Route::get('pedoman-akademik', [HomeController::class, 'akademik']);
Route::get('pedoman-non-akademik', [HomeController::class, 'nonakademik']);

Route::get('/show-pedoman/{jenis_pedoman}', [HomeController::class, 'showPedoman']);

Route::get('tracer', [HomeController::class, 'homeTracer']);

Route::get('project/pbl', [HomeController::class, 'pbl']);
Route::get('project/tugas-akhir', [HomeController::class, 'tugasAkhir']);
Route::get('project/penelitian', [HomeController::class, 'penelitian']);
Route::get('project/pengabdian', [HomeController::class, 'pengabdian']);

Route::get('pelayanan/survei', [HomeController::class, 'survei']);

Route::get('pelayanan/survei-kepuasan-dosen', [HomeController::class, 'surveiDosen']);
Route::get('pelayanan/survei-kepuasan-teknisi', [HomeController::class, 'surveiTeknisi']);
Route::get('pelayanan/survei-kepuasan-mahasiswa', [HomeController::class, 'surveiMahasiswa']);


Route::get('/test', [AuthController::class, 'test']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);
