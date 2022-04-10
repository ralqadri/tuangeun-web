<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminView.adminAccDashboard', [
            "admin" => Admin::all()
        ]);
    }

    public function create()
    {
        return view('adminView.adminAccCreate');
    }
}
