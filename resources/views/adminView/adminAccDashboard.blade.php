@extends('layout.dashboardMain')

@section('content')
  <div class="mt-4 ms-4">

    <div class="container">
      <h3>Admin Account Database</h3>
      <a href="/dashboard/admin/create" class="btn btn-primary
      float-right">Tambah Account Admin</a><br /><br />
      <table class="table table-light table-bordered table-striped table-responsive-md">
          <tr>
              <th>ID Admin</th>
              <th>Username</th>
              <th>Password</th>
              <th>Email</th>
              <th>Action</th>

              @foreach($admin as $a)
                <tr>
                  <td>{{ $a->id_admin }}</td>
                  <td>{{ $a->username }}</td>
                  <td>{{ $a->password }}</td>
                  <td>{{ $a->email }}</td>
                  <td>
                    <a href="/dashboard/admin/edit/{{ $a->id_admin }}" class="btn btn-warning"><i class='bx bx-edit-alt' ></i> Edit</a>
                    <a href="/dashboard/admin/delete/{{ $a->id_admin }}" class="btn btn-danger"><i class='bx bx-trash' ></i> Delete</a>
                  </td>
                </tr>
              @endforeach
          </tr>
      </table>
    </div>
  </div>
@endsection
