@extends('layout.dashboardMain')

@section('content')
<div>
  <h3>Tambah Data Restaurant</h3>

  <br>

  <form action="/dashboard/restaurant/store" method="post">
    {{ csrf_field() }}
    <label for="nama">Nama</label> <input type="text" name="nama" id="nama" required="required">
    <br><br>
    <label for="alamat">Deskripsi</label> <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
    <br><br>
    <label for="category">Kategori</label> <input type="text" name="category" id="category" required="required">
    <br><br>
    <label for="alamat">Alamat</label> <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
    <br><br>
    <input type="submit" value="Simpan Data">
  </form>
</div>
@endsection
