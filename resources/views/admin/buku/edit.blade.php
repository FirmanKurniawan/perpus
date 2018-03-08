@extends('layouts.admin')
@section('title')
Edit Buku
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit Buku</div>
        <div class="card-body">
         <form action="{{url('admin/buku/update')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Kode Buku</label>
            <input type="text" class="form-control" name="kodebuku" id="formGroupExampleInput" 
            placeholder="Kode Buku" value="{{$buku->kodebuku}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Judul Buku</label>
            <input type="text" class="form-control" name="judulbuku" id="formGroupExampleInput" 
            placeholder="Judul Buku" value="{{$buku->judulbuku}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" id="formGroupExampleInput" 
            placeholder="Pengarang" value="{{$buku->pengarang}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Kategori</label>
            <input type="text" class="form-control" name="kategori" id="formGroupExampleInput" 
            placeholder="Kategori" value="{{$buku->kategori}}" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$buku->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection



