<!DOCTYPE html>
<html>
    <head>
        <title>Log in Page - Admin</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    </head>
    <body>
        <div class="main">
            <label>Sign In</label>
            <p class="desc">Admin Page for Web food review in bandung</p>

            <div class="loginForm" >
                <form action="/login" name="login" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="form-control" type="text" name="username" id="username" placeholder="Enter username" required autofocus>
                    <br>
                    <input class="form-control" type="password" name="password" id="password" placeholder="password" required>
                    <br>
                    <input type="submit" name="Submit" value="Login">
                </form>
            </div>
        </div>

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p class="text-danger">{{ session('loginError') }}<p>
        </div>
        @endif
        <img src="{{ asset('footer.svg') }}" class="footersvg">
    </body>
</html>
