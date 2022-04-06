<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminView.adminAccDashboard', [
            //"resto" => Restaurant::all()
        ]);
    }

    public function create()
    {
        return view('adminView.adminAccCreate');
    }
}
