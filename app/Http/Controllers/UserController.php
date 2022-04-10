<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('userView.userAccDashboard', [
            "user" => User::all()
        ]);
    }

    public function create()
    {
        return view('userView.userAccCreate');
    }
}
