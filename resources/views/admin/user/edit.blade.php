@extends('layouts.admin')
@section('title')
Edit User
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
         <form action="{{url('admin/user/update')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" name="username" id="formGroupExampleInput" 
            placeholder="Username" value="{{$user->username}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Password</label>
            <input type="password" class="form-control" name="password" id="formGroupExampleInput" 
            placeholder="isi ulang saat meng-update" required>
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">Status</label>
            <select class="form-control" name="status" required>
              <option value="1">Admin</option>
              <option value="2">Operator</option>
            </select>
          </div>


          @csrf
          <input type="hidden" name="id" value="{{$user->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection



