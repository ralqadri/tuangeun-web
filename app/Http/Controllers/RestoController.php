<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;


class RestoController extends Controller
{
    public function index()
    {
        $restaurants=Restaurant::oldest();

        if (request('search')) {
            $restaurants->where('name_resto', 'like', '%' . request('search') . '%');
        }

        return view('restoView.restoDashboard', [
            "resto" => $restaurants->get()
        ]);
    }

    public function create()
    {
        return view('restoView.restoCreate');
    }
}
