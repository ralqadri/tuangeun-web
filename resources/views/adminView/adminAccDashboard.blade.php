@extends('layout.dashboardMain')

@section('content')
  <div class="mt-4 ms-4">

    <div class="container">
      <h3>Admin Account Database</h3>
      <a href="/dashboard/restaurant/create" class="btn btn-primary
      float-right">Tambah Account Admin</a><br /><br />
      <table class="table table-light table-bordered table-striped table-responsive-md">
          <tr>
              <th>ID Admin</th>
              <th>username</th>
              <th>password</th>
              <th>email</th>
              <th>Action</th>

              {{-- @foreach($resto as $r)
                <tr>
                  <td>{{ $r->id_resto }}</td>
                  <td>{{ $r->name_resto }}</td>
                  <td>{{ $r->desc_resto }}</td>
                  <td>{{ $r->category }}</td>
                  <td>
                    <a href="/product/{{ $r->id }}/edit" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              @endforeach --}}
          </tr>
      </table>
    </div>
  </div>
@endsection
