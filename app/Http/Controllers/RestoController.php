<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RestoController extends Controller
{

    // GET: method untuk menampilkan semua (RESTful)
    public function index() {
        return (new ResponseController)->toResponse(Restaurant::all(), 200);
    }

    // GET: method untuk menampilkan resto yang dicari (RESTful)
    public function show(Request $req) {
        if (!empty($req->id)) {
            $resto = Restaurant::find($req->id);
        } else {
            $resto = Restaurant::where('name_resto', 'LIKE', '%'.$req->nama.'%');
        }
        if (!empty($resto)) {
            return (new ResponseController)->toResponse($resto, 200, $req);
        } else {
            return (new ResponseController)->toResponse($resto, 404, "Restoran tidak ditemukan!");
        }
    }

    public function showSearch($nama) {
            $restaurants = Restaurant::oldest();
            $restaurants->where('name_resto', 'like', '%' . $nama . '%');
            $resto = $restaurants->get();

            // $resto = Restaurant::where('name_resto', 'LIKE', '%'.$nama.'%');
        if (!empty($resto)) {
            return (new ResponseController)->toResponse($resto, 200, "Restoran(s) ditemukan");
        } else {
            return (new ResponseController)->toResponse($resto, 404, "Restoran tidak ditemukan!");
        }
    }
    public function showSearchCategory($nama) {
            $restaurants = Restaurant::oldest();
            $restaurants->where('category', 'like', '%' . $nama . '%');
            $resto = $restaurants->get();

            // $resto = Restaurant::where('name_resto', 'LIKE', '%'.$nama.'%');
        if (!empty($resto)) {
            return (new ResponseController)->toResponse($resto, 200, "categories ditemukan");
        } else {
            return (new ResponseController)->toResponse($resto, 404, "categories tidak ditemukan!");
        }
    }

    // POST: method untuk menyimpan data (RESTful)
    public function save(Request $req) {
        $resto = new Restaurant;
        $now = Carbon::now()->toDateTimeString();

        $resto->name_resto = $req->nama;
        $resto->desc_resto = $req->desc;
        $resto->category = $req->category;
        $resto->alamat_resto = $req->alamat;
        $resto->created_at = $now;
        $resto->updated_at = $now;
        $resto->save();

        return (new ResponseController)->toResponse($resto, 200, "Data berhasil ditambah.");
    }

    // PUT: method untuk update data (RESTful)
    public function update(Request $req) {
        // $resto = Restaurant::find($id);
        $resto = Restaurant::find($req->id);
        $now = Carbon::now()->toDateTimeString();

        $resto->name_resto = $req->nama;
        $resto->desc_resto = $req->desc;
        $resto->category = $req->category;
        $resto->alamat_resto = $req->alamat;
        $resto->updated_at = $now;
        $resto->save();

        return (new ResponseController)->toResponse($resto, 200, "Data berhasil diubah.");
    }

    // DELETE: method untuk hapus data (RESTful)
    public function delete(Request $req) {
        if (!empty($id)) {
            $resto = Restaurant::find($id);
        } else {
            $resto = Restaurant::find($req->id);
        }

        if (!empty($resto)) {
            $data = $resto;
            $resto->delete();
            return (new ResponseController)->toResponse($data, 200, "Data berhasil dihapus.");
        }

        return (new ResponseController)->toResponse($resto, 404, "Restoran tidak ditemukan!");
    }

    // public function index()
    // {
    //     $restaurants=Restaurant::oldest();

    //     if (request('search')) {
    //         $restaurants->where('name_resto', 'like', '%' . request('search') . '%');
    //     }

    //     return view('restoView.restoDashboard', [
    //         "resto" => $restaurants->get()
    //     ]);
    // }

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
    public function updateresto(Request $req)
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
    public function deleteresto($id) {
        // menghapus data restoran sesuai dengan id yang dipilih
        DB::table('restaurants')->where('id_resto', $id)->delete();

        // redirect ke dashboard resto
        return redirect('/dashboard/restaurant');
    }
}
