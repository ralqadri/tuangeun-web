<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;


class RestoController extends Controller
{
    public function index()
    {
        return view('restoView.restoDashboard', [
            "resto" => Restaurant::all()
        ]);
    }

    public function create()
    {
        return view('restoView.restoCreate');
    }
}
