<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminView.adminAccDashboard', [
            "admin" => Admin::all()
        ]);
    }

    // method untuk masuk ke page /dashboard/admin/create
    public function create()
    {
        return view('adminView.adminAccCreate');
    }

    // method untuk mengambil data admin yang dicatat di form create() dan menyimpan ke DB
    public function store(Request $req)
    {
        $now = Carbon::now()->toDateTimeString();

        DB::table('admins')->insert([
            'username' => $req->username,
            'password' => $req->password,
            'email' => $req->email,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        return redirect('/dashboard/admin');
    }

    // method untuk masuk ke page edit data admin yang ingin di edit
    public function edit($id)
    {
        // cari ke DB dan simpan data admin yang ingin di edit ke $admin
        $admin = DB::table('admins')->where('id_admin', $id)->get();
    
        // passing data admin yang di dapat dari DB tadi ke view untuk form edit
        return view('adminView.adminAccEdit', ['admin' => $admin]);
    }

    // method untuk update data admin di DB
    public function update(Request $req)
    {
        $now = Carbon::now()->toDateTimeString();
        
        // update data admin dimana id_admin sesuai dgn id di request
        DB::table('admins')->where('id_admin', $req->id)->update([
            'username' => $req->username,
            'password' => $req->password,
            'email' => $req->email,
            'updated_at' => $now
        ]);

        // redirect ke dashboard admin
        return redirect('/dashboard/admin');
    }
}
