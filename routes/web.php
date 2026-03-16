<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ctoko;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/home2', function () {
    return view('welcome2');
})->name('home2');

Route::get('/toko', [Ctoko::class, 'tampil'])->name('toko.tampil');
Route::get('/toko/tambah', [Ctoko::class, 'tambah'])->name('toko.tambah');
Route::post('/toko/simpan', [Ctoko::class, 'simpan'])->name('toko.simpan');
Route::get('/toko/{id}/edit', [Ctoko::class, 'edit'])->name('toko.edit');
Route::put('/toko/{id}/simpan_edit', [Ctoko::class, 'simpan_edit'])->name('toko.simpan_edit');
Route::delete('/toko/hapus/{id}', [Ctoko::class, 'hapus'])->name('toko.hapus');