@extends('layout.dashboardMain')

@section('content')
  <div class="mt-4 ms-4">

    <div class="container">
      <h3>User Account Database</h3>

      <table class="table table-light table-bordered table-striped table-responsive-md">
          <tr>
              <th>ID user</th>
              <th>Username</th>
              <th>Password</th>
              <th>Nama</th>
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
