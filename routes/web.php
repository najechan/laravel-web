<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\MatakuliahController;

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pcr', function () {
    return ('Selamat Datang di Website Kampus PCR!');
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/matakuliah/{kode}/edit', [MatakuliahController::class, 'edit']);
Route::put('/matakuliah/{kode}', [MatakuliahController::class, 'update']);
Route::delete('/matakuliah/{kode}', [MatakuliahController::class, 'destroy']);

route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');