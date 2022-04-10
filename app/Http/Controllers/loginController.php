<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {
        return view('loginDashboard');
    }

    public function authenticate()
    {
        if(isset($_POST['Submit'])){
            $logins = array('RafiRizkya' => '1301193344','username1' => 'password1','username2' => 'password2');

            foreach(DB::table('admins')->get() as $d)
            {
                $logins[$d->username] = $d->password;
            };

            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            if (isset($logins[$username]) && $logins[$username] == $password){
                $_SESSION['UserData']['username']=$logins[$username];
                return redirect()->intended('/dashboard')->with('username', $_POST["username"]);
            } else {
                session_unset();
                return back()-> with('loginError', 'Login Failed!');
            }
        }

        /* $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        dd('test');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
         */
        //return back()-> with('loginError', 'Login Failed!');
    }
}
