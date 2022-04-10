<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $now = Carbon::now()->toDateTimeString();
        // insert data yang dipegang dari form (dalam var $req) ke DB
        DB::table('restaurants')->insert([
            'name_resto' => $req->nama,
            'desc_resto' => $req->desc,
            'category' => $req->category,
            'alamat_resto' => $req->alamat,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        // redirect ke dashboard resto
        return redirect('/dashboard/restaurant');
    }

    // method untuk masuk ke page edit data restoran yang dipilih
    public function edit($id)
    {
        // mengambil data restoran sesuai id yang dipilih
        $resto = DB::table('restaurants')->where('id_resto', $id)->get();

        // passing data restoran yang di dapat ke view restoEdit.blade.php
        return view('restoView.restoEdit', ['resto' => $resto]);
    }

    // method untuk update data restoran di DB
    public function update(Request $req)
    {
        $now = Carbon::now()->toDateTimeString();
        
        // update data admin dimana id_restonya sesuai dgn id di request
        DB::table('restaurants')->where('id_resto', $req->id)->update([
            'name_resto' => $req->nama,
            'desc_resto' => $req->desc,
            'category' => $req->category,
            'alamat_resto' => $req->alamat,
            'updated_at' => $now
        ]);

        // redirect ke dashboard resto
        return redirect('/dashboard/restaurant');
    }

    // method untuk hapus data restoran dari DB
    public function delete($id) {
        // menghapus data restoran sesuai dengan id yang dipilih
        DB::table('restaurants')->where('id_resto', $id)->delete();

        // redirect ke dashboard resto
        return redirect('/dashboard/restaurant');
    }
}
