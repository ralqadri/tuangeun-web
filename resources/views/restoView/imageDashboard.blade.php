@extends('layout.dashboardMain')

@section('content')
  <div class="mt-4 ms-4">
    <h3>Database Image Restaurant</h3>

    <div class="col-4">
      {{-- <span class="float-left">{{ session('msg') }}</span> --}}
      <a href="/product/create" class="btn btn-secondary
      float-right">Tambah</a><br /><br />
      <table class="table table-bordered table-striped table-responsive-md">
          <tr>
              <th>ID Image</th>
              <th>ID Restaurant</th>
              <th>URL Image</th>
              <th>Utility</th>
          </tr>
      </table>
    </div>
  </div>
@endsection