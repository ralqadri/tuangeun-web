@extends('layout.dashboardMain')

@section('content')
  <div class="mt-4 ms-4">
    <h3>Database Image Restaurant</h3>

    <div class="container">
      <a href="/dashboard/restaurant/create" class="btn btn-primary
      float-right">Tambah Data Image Restaurant</a><br /><br />
      <table class="table table-light table-bordered table-striped table-responsive-md">

        {{-- search --}}
        <div class="row">
            <div class="col-md-6">
                  <form action="/dashboard/imgRestaurant">
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Search nama restaurant.." name="search">
                          <button class="btn btn-primary" type="submit">Search</button>
                      </div>
                  </form>
            </div>
        </div>

          <tr>
              <th>ID Image</th>
              <th>ID Restaurant</th>
              <th>Nama Restaurant</th>
              <th>URL Image</th>
              <th>Action</th>

              @foreach($imgData as $img)
                <tr>
                  <td>{{ $img->id_resto_img }}</td>
                  <td>{{ $img->id_resto }}</td>
                  <td>{{ $img->name_resto}}</td>
                  <td>{{ $img->img_resto}}</td>
                  <td>
                    <div class="btn-group" role="group">
                        <a href="/imgRestaurant/{{ $img->id_resto_img }}/edit" class="btn btn-warning"><i class='bx bx-edit-alt' ></i> Edit</a>
                        <a href="#" class="btn btn-danger"><i class='bx bx-trash' ></i> Delete</a>
                        <a href="#" class="btn btn-info"><i class='bx bx-image-alt'></i> Preview</a>
                    </div>
                  </td>
                </tr>
              @endforeach
          </tr>
      </table>
    </div>
  </div>
@endsection

