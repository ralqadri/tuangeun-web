<!DOCTYPE html>
<html>
    <head> 
        <title>Log in Page - Admin</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    </head>
    <body>
        <div class="main">
            <div class="loginForm" >
                <form action="{{ url('/') }}" name="login" method="POST">
                    <label>Sign In</label>
                    <p class="desc">Admin Page for Web food review in bandung</p>
                    <p class="desc" style="font-size: 8px">Untuk demo akun: Username->RafiRizkya, Password->1301193344</p>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="Username" placeholder="Enter username" required>
                    <br>
                    <input type="password" name="Password" placeholder="password" required>
                    <br>
                    <input type="submit" name="Submit" value="Login">
                </form>
            </div>
        </div>
        
        <img src="{{ asset('footer.svg') }}" class="footersvg">
    </body>
</html>
