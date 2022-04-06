<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('userView.userAccDashboard', [
            //"resto" => Restaurant::all()
        ]);
    }

    public function create()
    {
        return view('userView.userAccCreate');
    }
}
