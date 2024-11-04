@extends('layout')

@section('content')

<h4>Tambah Data Produk</h4>
<div class="container-fluid">
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <form id="myForm" action="" method="post">  
                <div class="form-group">
                    <label for="barcode" class="form-label">Barcode</label>
                    <input class="form-control" type="text" name="barcode">
                </div>
                <div class="form-group">
                    <label for="namaproduk" class="form-label">Nama Produk</label>
                    <input class="form-control" type="text" name="namaproduk" id="namaproduk">
                </div>
                <div class="form-group">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input class="form-control" type="text" name="kategori" id="kategori">
                </div>
                <div class="form-group">
                    <label for="hargabarang" class="form-label">Harga</label>
                    <input class="form-control" type="number" name="hargabarang" id="hargabarang">
                </div>    
            </form>
        
            <a href="#" class="btn btn-primary">Add</a>
        </div>
      </div>
    </div>

    

@endsection