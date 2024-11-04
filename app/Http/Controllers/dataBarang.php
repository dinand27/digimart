<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataBarang extends Controller
{
    function tampil()
    {
        return view('produk.tampil',[
            'title' => 'Halaman Produk',
        ]);
    }

    function tambah() {
        return view('produk.tambah');
    }
}
