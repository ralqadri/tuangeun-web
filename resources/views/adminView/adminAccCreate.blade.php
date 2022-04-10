@extends('layout.dashboardMain')

@section('content')
<div class="mt-4 ms-4">
  <h3>Tambah Akun Admin</h3>

  <br>

  <div class="container">
    <div class="form-group">
      <form action="/dashboard/admin/store" method="post">
        {{ csrf_field() }}
        <label for="username">Username</label> <input type="text" name="username" id="username" required="required" class="form-control">
        <br><br>
        <label for="alamat">Password</label> <input type="password" name="password" id="password" required="required" class="form-control">
        <br><br>
        <label for="email">Email</label> <input type="email" name="email" id="email" required="required" class="form-control">
        <br><br>
        <input type="submit" value="Tambah Akun" class="btn btn-success">
      </form>
    </div>
  </div>
</div>
@endsection
