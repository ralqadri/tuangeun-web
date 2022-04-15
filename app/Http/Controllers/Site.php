<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Site extends Controller
{
    public function index()
    {
        return view('LoginDashboard');
    }
    
    public function auth()
    {
        if(isset($_POST['Submit'])){     
            $logins = array('RafiRizkya' => '1301193344','username1' => 'password1','username2' => 'password2');     

            $Username = isset($_POST['Username']) ? $_POST['Username'] : '';       
            $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
            if (isset($logins[$Username]) && $logins[$Username] == $Password){     
                $_SESSION['UserData']['Username']=$logins[$Username];               
                return $this->home();    
            } else {
                session_unset();
                return $this->index()."Username/Password Salah!";   
            }
        }
    }
 
    public function home()
    {
        return view('home');
    }

    public function dashboardLayout()
    {
        return view('layout.dashboardMain');
    }

    public function dashboardRestaurant()
    {
        return view('restoView.restoDashboard');
    }
}