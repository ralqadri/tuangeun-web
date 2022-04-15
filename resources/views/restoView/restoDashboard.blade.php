@extends('layout.dashboardMain')

@section('content')
  <div class="mt-4 ms-4">


    <div class="container">
      <h3>Database Restaurant</h3>
      <a href="/dashboard/restaurant/create" class="btn btn-primary
      float-right">Tambah Data Restaurant</a><br /><br />
      <div class="row">
          <div class="col-md-6">
                <form action="/dashboard/restaurant">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search nama restaurant.." name="search">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
          </div>
      </div>
      <div id="resto-message"></div>
      <table class="table table-light table-bordered table-striped table-responsive-md" id="resto-table">
        <thead>
          <th>ID Restaurant</th>
          <th>Nama Restaurant</th>
          <th>Deskripsi Restaurant</th>
          <th>Category</th>
          <th>Alamat</th>
          <th>Action</th>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
@endsection
