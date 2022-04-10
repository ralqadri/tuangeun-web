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
      <table class="table table-light table-bordered table-striped table-responsive-md">
          <tr>
              <th>ID Restaurant</th>
              <th>Nama Restaurant</th>
              <th>Deskripsi Restaurant</th>
              <th>Category</th>
              <th>Alamat</th>
              <th>Action</th>

              @foreach($resto as $r)
                <tr>
                  <td>{{ $r->id_resto }}</td>
                  <td>{{ $r->name_resto }}</td>
                  <td>{{ $r->desc_resto }}</td>
                  <td>{{ $r->alamat_resto }}</td>
                  <td>{{ $r->category }}</td>
                  <td>
                    <a href="/restaurant/{{ $r->id }}/edit" class="btn btn-warning"><i class='bx bx-edit-alt' ></i> Edit</a>
                    <a href="#" class="btn btn-danger"><i class='bx bx-trash' ></i> Delete</a>
                  </td>
                </tr>
              @endforeach
          </tr>
      </table>
    </div>
  </div>
@endsection
