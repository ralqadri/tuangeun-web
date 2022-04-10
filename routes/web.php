<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImgController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ratingController;
use App\Http\Controllers\RestoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::post('/', function () {
    return view('loginDashboard');
});
 */


//LOGIN
Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'authenticate']);


Route::get('/dashboard',[Site::class, 'dashboardLayout']);

//Restaurant
Route::get('/dashboard/restaurant',[RestoController::class, 'index']);
Route::get('/dashboard/restaurant/create',[RestoController::class, 'create']);

//route post data yang ditambah (form submit)
Route::post('/dashboard/restaurant/store', [RestoController::class, 'store']);


//imgRestaurant
Route::get('/dashboard/imgRestaurant',[ImgController::class, 'index']);
//Rating
Route::get('/dashboard/rating',[ratingController::class, 'index']);
//User
Route::get('/dashboard/user',[UserController::class, 'index']);
//Admin
Route::get('/dashboard/admin',[AdminController::class, 'index']);
