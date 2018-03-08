@extends('layouts.admin')
@section('title')
Add User 
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Tambah User</div>
        <div class="card-body">
         <form action="{{url('admin/user/post')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" name="username" id="formGroupExampleInput" 
            placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Password</label>
            <input type="password" class="form-control" name="password" id="formGroupExampleInput" 
            placeholder="Password" required>
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">Status</label>
            <select class="form-control" name="status" required>
              <option value="1">Admin</option>
              <option value="2">Operator</option>
            </select>
          </div>


          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection



