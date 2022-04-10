@extends('layout.dashboardMain')

@section('content')
<div class="mt-4 ms-4">
  <h3>Edit Akun Admin</h3>

  <br>

  <div class="container">
    <div class="form-group">
      @foreach($admin as $a)
      <form action="/dashboard/admin/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $a->id_admin }}"> <br><br>
        <label for="username">Username</label> <input type="text" name="username" id="username" required="required" value="{{ $a->username }}" class="form-control">
        <br><br>
        <label for="alamat">Password</label> <input type="password" name="password" id="password" required="required" value="{{ $a->password }}" class="form-control">
        <br><br>
        <label for="email">Email</label> <input type="email" name="email" id="email" required="required" value="{{ $a->email }}" class="form-control">
        <br><br>
        <input type="submit" value="Edit Akun" class="btn btn-success">
      </form>
      @endforeach
    </div>
  </div>
</div>
@endsection
