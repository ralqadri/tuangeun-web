<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ImgController extends Controller
{
    public function index()
    {
        $imgData = DB::table('resto_img_data')
        ->orderBy('restaurants.id_resto')
        ->join('restaurants', 'resto_img_data.id_resto', '=', 'restaurants.id_resto');

        if (request('search')) {
            $imgData->where('name_resto', 'like', '%' . request('search') . '%');
        }

        return view('restoView.imageDashboard', [
            "imgData" => $imgData->get()
        ]);
    }

    public function create()
    {
        return view('restoView.imageCreate');
    }
}
