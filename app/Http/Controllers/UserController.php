<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('userView.userAccDashboard', [
            "user" => User::all()
        ]);
    }

    public function create()
    {
        return view('userView.userAccCreate');
    }

    public function registerApi(Request $req)
    {
        $user = User::create($req->all());

        if (!empty($user)) {
            return (new ResponseController)->toResponse($user, 200, "Register Accepted");
        } else {
            return (new ResponseController)->toResponse($user, 404, "Register Failed!");
        }
    }

    public function loginApi(Request $req)
    {
        $username = $req->username;
        $password = $req->password;
        $users = User::oldest();
        $users->where('username', '=', $username);
        $users->where('password', '=', $password);

        $user=$users->get();

        if ($user->isNotEmpty()) {
            return (new ResponseController)->toResponse($user, 201, "login success");
        } else {
            return (new ResponseController)->toResponse($user, 404, "login failed!");
        }

    }

    public function indexUser() {
        return (new ResponseController)->toResponse(User::all(), 200);

    }

    public function showUserSearch($id) {
            $users = User::oldest();
            $users->where('id_user', '=' ,$id);
            $user = $users->get();

            // $user = Restaurant::where('name_resto', 'LIKE', '%'.$nama.'%');
        if (!empty($user)) {
            return (new ResponseController)->toResponse($user, 200, "User(s) ditemukan");
        } else {
            return (new ResponseController)->toResponse($user, 404, "User tidak ditemukan!");
        }
    }

}
