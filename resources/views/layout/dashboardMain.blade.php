<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <!-- bootstrap 5 css -->
    <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"/>

    <!-- BOX ICONS CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/dashboard2.css') }}" />
  </head>

  <body>
    <!-- Side-Nav -->
    <div
      class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column"
      id="sidebar"
    >
    <ul class="nav flex-column text-white w-100">
        <a href="/dashboard" class="nav-link h3 text-white my-2">
          Tuangeun
        </a>
        <a href="/dashboard/restaurant">
            <li class="nav-link">
                <i class="bx bxs-data"></i>
                <span class="mx-2">Restaurant</span>
            </li>
        </a>
        <a href="/dashboard/imgRestaurant">
            <li class="nav-link">
                <i class="bx bxs-image"></i>
                <span class="mx-2">Image Database</span>
            </li>
        </a>
        <a href="/dashboard/rating">
            <li href="#" class="nav-link">
                <i class='bx bxs-star-half'></i>
                <span class="mx-2">Rating</span>
            </li>
        </a>
        <a href="/dashboard/user">
            <li href="#" class="nav-link">
                <i class='bx bxs-user-account'></i>
                <span class="mx-2">User</span>
            </li>
        </a>
        <a href="/dashboard/admin">
            <li href="#" class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Admin</span>
            </li>
        </a>
    </ul>
    <a href="#">
        <span class="nav-link  w-100 mb-5">
            <i class="bx bxs-door-open"></i> Log Out
        </span>
    </a>

    </div>

    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont">

    </body>
      <!-- Top Nav -->
      <nav class="navbar top-navbar navbar-light bg-light px-5">
        <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
        <h6> {{ session('username') }} <i class='bx bx-chevron-down'></i></h6>
      </nav>
      <!--End Top Nav -->
      <div>

        @yield('content')

        </div>
    </div>

    <!-- custom js -->
    <script>
      var menu_btn = document.querySelector("#menu-btn");
      var sidebar = document.querySelector("#sidebar");
      var container = document.querySelector(".my-container");
      menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
      });
    </script>
  </body>
</html>
