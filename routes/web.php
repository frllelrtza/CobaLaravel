<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function (Illuminate\Http\Request $request) {
    $nim = $request->input('nim');
    $nama = $request->input('nama');
    $prodi = $request->input('prodi');
    $fakultas = $request->input('fakultas');
    $jenis_kelamin = $request->input('jenis_kelamin');

    // Simpan data ke database atau lakukan operasi lain sesuai kebutuhan

    return redirect('/form')->with('success', 'Form berhasil disubmit!');
})->name('submit-form');
