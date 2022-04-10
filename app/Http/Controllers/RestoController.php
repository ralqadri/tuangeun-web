<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    // method untuk masuk ke page /dashboard/restaurant/create
    public function create()
    {
        return view('restoView.restoCreate');
    }

    // method untuk mengambil data yang dicatat di form create() dan menyimpan ke DB
    public function store(Request $req)
    {
        error_log($req);
        // insert data yang dipegang dari form (dalam var $req) ke DB
        DB::table('restaurants')->insert([
            'name_resto' => $req->nama,
            'desc_resto' => $req->desc,
            'category' => $req->category,
            'alamat_resto' => $req->alamat
        ]);

        // redirect ke dashboard resto
        return redirect('/dashboard/restaurant');
    }
}
