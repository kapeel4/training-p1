<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// public
Route::get('/', function () {
    return view('welcome');
});


// logged or register
Auth::routes();


// this is for admin
Route::get('/home', [HomeController::class, 'index'])->name('home');
