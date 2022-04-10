@extends('layout.dashboardMain')

@section('content')
  <div class="mt-4 ms-4">


    <div class="container">
      <h3>Database Rating</h3>

      <table class="table table-light table-bordered table-striped table-responsive-md">

        {{-- search --}}
        <div class="row">
            <div class="col-md-6">
                  <form action="/dashboard/rating">
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Search nama restaurant.." name="search">
                          <button class="btn btn-primary" type="submit">Search</button>
                      </div>
                  </form>
            </div>
        </div>

          <tr>
              <th>ID Rating</th>
              <th>Rate</th>
              <th>Review</th>
              <th>Nama Restaurant>
              <th>ID Restaurant</th>
              <th>ID User</th>
              <th>Rating Date</th>
              <th>Action</th>

              @foreach($rating as $r)
                <tr>
                  <td>{{ $r->id_rating }}</td>
                  <td>{{ $r->rate }}</td>
                  <td>{{ $r->name_resto }}</td>
                  <td>{{ $r->review }}</td>
                  <td>{{ $r->id_resto }}</td>
                  <td>{{ $r->id_user }}</td>
                  <td>{{ $r->date_rating }}</td>
                  <td>
                    <a href="/product/{{ $r->id_rating }}/edit" class="btn btn-warning"><i class='bx bx-edit-alt' ></i> Edit</a>
                    <a href="#" class="btn btn-danger"><i class='bx bx-trash' ></i> Delete</a>
                  </td>
                </tr>
              @endforeach
          </tr>
      </table>
    </div>
  </div>
@endsection
