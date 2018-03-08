@extends('layouts.operator')
@section('title')
Pengembalian Dasboard
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Pengembalian Dashboard</div>
        <div class="card-body">
          <div class="form-group">
            <form class="form-inline my-2 my-lg-0" action="{{url('operator/search')}}" method="get">
            <label for="formGroupExampleInput">Cari Peminjam &nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="search" class="form-control" name="query" id="formGroupExampleInput" 
            placeholder="Cari Disini ..." required>
            <input type="hidden" name="search" value="1">
          </form>
          </div>
          <div class="table-responsive">
            <table class="table" id="example">
              <thead>
                <tr>
                  <th>Nama Peminjam</th>
                  <th>Alamat</th>
                  <th>Judul Buku</th>
                  <th>Tanggal Pinjam</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pem as $q)
                <tr>
                  <td>{{$q->namapeminjam}}</td>
                  <td>{{$q->alamatpeminjam}}</td>
                  <td>{{$q->judulbuku}}</td>
                  <td>{{$q->tanggalpinjam}}</td>
                  <td>
                   <a href="{{url('operator/pengembalian/'.$q->id)}}" onclick="return confirm('anda yakin untuk memilihnya ?')" 
                     class="btn btn-outline-warning btn-sm">Pengembalian</a>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
             <hr>
           </li>
         </div>
       </div>
     </div>
   </div>
 </div>


 @endsection



