@extends('layout.dashboardMain')

@section('content')
<div class="mt-4 ms-4">
  <h3>Tambah Data Restaurant</h3>

  <br>

  <div class="container">
    <div class="form-group">
      @foreach($resto as $r)
      <form action="/dashboard/restaurant/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $r->id_resto }}">
        <label for="nama">Nama</label> <input type="text" name="nama" id="nama" required="required" value="{{ $r->name_resto }}" class="form-control">
        <br><br>
        <label for="alamat">Deskripsi</label> <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">{{ $r->desc_resto }}</textarea>
        <br><br>
        <label for="category">Kategori</label> <input type="text" name="category" id="category" required="required" value="{{ $r->category }}" class="form-control">
        <br><br>
        <label for="alamat">Alamat</label> <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control">{{ $r->alamat_resto }}</textarea>
        <br><br>
        <input type="submit" value="Simpan Data" class="btn btn-success">
      </form>
      @endforeach
    </div>
  </div>
</div>
@endsection
