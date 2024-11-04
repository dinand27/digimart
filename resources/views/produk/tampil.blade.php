@extends('layout')

@section('content')

<h4 class="text-center">LIST PRODUK</h4>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add
  </button>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>No</th>
            <th>NamaProduk</th>
            <th>Kategori</th>
            <th>HargaSatuan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>

            </td>
        </tr>
    </tbody>
</table>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        {{-- isi --}}

<div class="container-fluid">
    <div class="card" style="width:auto;">
        <div class="card-body">
            <form id="myForm" action="" enctype="multipart/form-data">  
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
                <div class="form-group">
                    <input class="form-control" type="file" name="image" accept="image/*" id="image" onchange="readURL(this)">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="" id="save">
                </div>

                    
            </form>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
  </div>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

$(document).ready(function() {
    $("#MyModal").modal();
  });

</script>


@endsection