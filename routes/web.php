<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site;
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

Route::get('/',[Site::class, 'index']);
Route::post('/',[Site::class, 'auth']);
Route::get('/test',[Site::class, 'home2']);
