<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class dataBarang extends Controller
{
    function tampil()
    {
        return view('produk.tampil',[
            'title' => 'Halaman Produk',
        ]);
    }

    function produktampil(){
        $produk= Produk::all();
        return response()->json([
            'produk' => $produk
        ]);
    }

    function tambah() {
        return view('produk.tambah');
    }
}
