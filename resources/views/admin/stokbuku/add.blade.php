@extends('layouts.admin')
@section('title')
Add Stok Buku
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Stok Buku</div>
        <div class="card-body">
         <form action="{{url('admin/stokbuku/post')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Judul Buku</label>
            <?php
              $judul = \App\daftar_buku::all();
            ?>
            <select class="form-control" name="judulbuku" required>
              <option selected>Pilih Satu</option>
              @foreach($judul as $q)
              <option value="{{$q->judulbuku}}">{{$q->judulbuku}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Nomor Rak</label>
            <input type="text" class="form-control" name="nomorrak" id="formGroupExampleInput" 
            placeholder="Nomor Rak" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Jumlah Buku</label>
            <input type="text" class="form-control" name="jumlahbuku" id="formGroupExampleInput" 
            placeholder="Jumlah Buku" required>
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Stok</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection



