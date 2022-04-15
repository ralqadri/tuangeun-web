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

// !! RESTAURANT
Route::get('/dashboard/restaurant',[Site::class, 'dashboardRestaurant']);

// ! ADD RESTAURANT
// route get untuk masuk ke page untuk tambah data restoran
Route::get('/dashboard/restaurant/create',[RestoController::class, 'create']);
//route post data restoran yang ditambah (data dari form submit)
Route::post('/dashboard/restaurant/store', [RestoController::class, 'store']);

// ! EDIT RESTAURANT
//route get untuk masuk ke page data restoran yang mau di edit
Route::get('/dashboard/restaurant/edit/{id}', [RestoController::class, 'edit']);
//route post data restoran yang ingin di update setelah mengisi form
Route::post('/dashboard/restaurant/update', [RestoController::class, 'update']);

// ! DELETE RESTAURANT
// route get untuk masuk delete restoran yang mau dihapus
Route::get('/dashboard/restaurant/delete/{id}', [RestoController::class, 'delete']);

//imgRestaurant
Route::get('/dashboard/imgRestaurant',[ImgController::class, 'index']);
//Rating
Route::get('/dashboard/rating',[ratingController::class, 'index']);
//User
Route::get('/dashboard/user',[UserController::class, 'index']);

// !! ADMIN
Route::get('/dashboard/admin',[AdminController::class, 'index']);

// ! ADD ADMIN
// route get untuk masuk ke page untuk tambah data admin
Route::get('/dashboard/admin/create', [AdminController::class, 'create']);
// route post data admin yang ditmabah (data dari form submit)
Route::post('/dashboard/admin/store', [AdminController::class, 'store']);

// ! EDIT ADMIN
// route get untuk masuk ke page data akun admin yang mau di edit
Route::get('/dashboard/admin/edit/{id}', [AdminController::class, 'edit']);
// route post data restoran yang akan di update
Route::post('/dashboard/admin/update', [AdminController::class, 'update']);

// ! DELETE ADMIN
// route get untuk masuk delete admin yang mau dihapus
Route::get('/dashboard/admin/delete/{id}', [AdminController::class, 'delete']);
