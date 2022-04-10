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
              <th>Email</th>
              <th>Profile Picture</th>
              <th>Action</th>

              @foreach($user as $u)
                <tr>
                  <td>{{ $u->id_user }}</td>
                  <td>{{ $u->username }}</td>
                  <td>{{ $u->password }}</td>
                  <td>{{ $u->full_name }}</td>
                  <td>{{ $u->email }}</td>
                  <td>{{ $u->profpic }}</td>
                  <td>
                    <a href="/user/{{ $u->id }}/edit" class="btn btn-warning"><i class='bx bx-edit-alt' ></i> Edit</a>
                    <a href="#" class="btn btn-danger"><i class='bx bx-trash' ></i> Delete</a>
                  </td>
                </tr>
              @endforeach
          </tr>
      </table>
    </div>
  </div>
@endsection
