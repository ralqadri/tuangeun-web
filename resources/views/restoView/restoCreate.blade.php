@extends('layout.dashboardMain')

@section('content')
<div class="mt-4 ms-4">
  <h3>Tambah Data Restaurant</h3>

  <br>

  <div class="container">
    <div class="form-group">
      <form action="/dashboard/restaurant/store" method="post">
        {{ csrf_field() }}
        <label for="nama">Nama</label> <input type="text" name="nama" id="nama" required="required" class="form-control">
        <br><br>
        <label for="alamat">Deskripsi</label> <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
        <br><br>
        <label for="category">Kategori</label> <input type="text" name="category" id="category" required="required" class="form-control">
        <br><br>
        <label for="alamat">Alamat</label> <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
        <br><br>
        <input type="submit" value="Simpan Data" class="btn btn-success">
      </form>
    </div>
  </div>
</div>
@endsection
