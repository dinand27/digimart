<?php

use App\Http\Controllers\dataBarang;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', [dataBarang::class,'tampil'])->name('produk.tampil');

Route::get('/produk/tambah', [dataBarang::class,'tambah'])->name('produk.tambah');

