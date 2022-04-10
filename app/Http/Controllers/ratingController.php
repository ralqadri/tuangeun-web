<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ratingController extends Controller
{
    public function index()
    {
        $rating = DB::table('ratings')
        ->orderBy('restaurants.id_resto')
        ->join('restaurants', 'ratings.id_resto', '=', 'restaurants.id_resto');

        if (request('search')) {
            $rating->where('name_resto', 'like', '%' . request('search') . '%');
        }

        return view('ratingView.ratingDashboard', [
            "rating" => $rating->get()
        ]);
    }

    public function create()
    {
        /* return view('restoView.imageCreate'); */
    }
}
