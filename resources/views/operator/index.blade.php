@extends('layouts.operator')
@section('title')
Operator Dasboard
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Operator Dashboard</div>

                <div class="card-body">
                    <center>
                        <h2>Peminjaman Buku</h2>
                        </center>
                        <hr>
                        <form action="{{url('operator/post')}}" method="POST">
                          <div class="form-group">
                            <label for="formGroupExampleInput">Nama Peminjam</label>
                            <input type="text" class="form-control" name="namapeminjam" id="formGroupExampleInput" 
                            placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="formGroupExampleInput" 
                            placeholder="Alamat" required>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Judul Buku</label>
                            <select class="form-control" name="judulbuku" required>
                              <option value="1" selected>Pilih Satu</option>
                              <?php
                                $buku = \App\daftar_buku::all();
                              ?>
                              @foreach($buku as $q)
                              <option value="{{$q->judulbuku}}">{{$q->judulbuku}}</option>
                              @endforeach
                          </select>
                      </div>

                      <div class="form-group">
                            <label for="formGroupExampleInput">Tanggal Pinjam</label>
                            <input type="date" class="form-control" name="tanggalpinjam" id="formGroupExampleInput" 
                            placeholder="Tanggal " required>
                        </div>


                      @csrf
                      <hr>
                      <button class="btn btn-outline-success float-right" type="submit">Pinjam Buku</button>
                  </form>

          </div>
      </div>
  </div>
</div>
</div>
@endsection
