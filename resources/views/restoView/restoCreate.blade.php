@extends('layout.dashboardMain')

@section('content')
  <div class="mt-4 ms-4">
    <h3>Tambah Data Restaurant:</h3>

    <div class="col-lg-8">
        <form method="POST" action="#">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Restaurant</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Restaurant">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"></label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
@endsection
