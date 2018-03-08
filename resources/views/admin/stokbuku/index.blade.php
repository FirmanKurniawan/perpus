@extends('layouts.admin')
@section('title')
Stok Buku Dasboard
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Stok Buku</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="example">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Judul Buku</th>
                  <th>Nomer Rak</th>
                  <th>Jumlah Buku</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i= 1;
                $stokbuku = \App\stok_buku::all();
                ?>
                @foreach($stokbuku as $q)
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$q->judulbuku}}</td>
                  <td>{{$q->nomor_rak}}</td>
                  <td>{{$q->jumlahbuku}}</td>
                  <td>
                   <a href="{{url('admin/stokbuku/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                     class="btn btn-outline-danger btn-sm">Delete</a>
                   </td>
                 </tr>
                 @endforeach
               </tbody>
             </table>
           </div>
           <hr>
           <li class="list-group-item float-right">
            <a href="{{url('admin/stokbuku/pdf')}}" class="btn btn-outline-success btn-sm">Export Ke PDF</a>
          </li>
          <li class="list-group-item float-left">
            <a href="{{url('admin/stokbuku/add')}}" class="btn btn-outline-primary btn-sm">Tambah Data</a>
          </li>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection



