<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/show", [DbController::class, "index"]);
Route::get("/database",[DbController::class,"database"]);
Route::get("/insert",[DbController::class,"insert"]);
Route::get("/edit",[DbController::class,"edit"]);
Route::get("/delete",[DbController::class,"delete"]);
// Route::get("/getPer",[DbController::class,"getData"]);


Route::get('/login',[LoginController::class,'login']);   // login page show 
Route::get('/register',[LoginController::class,'register']);   // register page show 