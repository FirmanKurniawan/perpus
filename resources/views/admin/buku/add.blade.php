@extends('layouts.admin')
@section('title')
Add Buku
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Tambah Buku</div>
        <div class="card-body">
         <form action="{{url('admin/buku/post')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Kode Buku</label>
            <input type="text" class="form-control" name="kodebuku" id="formGroupExampleInput" 
            placeholder="Kode Buku" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Judul Buku</label>
            <input type="text" class="form-control" name="judulbuku" id="formGroupExampleInput" 
            placeholder="Judul Buku" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" id="formGroupExampleInput" 
            placeholder="Pengarang" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Kategori</label>
            <input type="text" class="form-control" name="kategori" id="formGroupExampleInput" 
            placeholder="Kategori" required>
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection



