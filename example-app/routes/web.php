<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AbcController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AbcController::class, 'index'])->name('index');
Route::get('/create',[AbcController::class,'create'])->name('create');
Route::post('/store',[AbcController::class,'store'])->name('store');

Route::get('/about', function () {
    return view('about');
});
Route::get('/about-us', function () {
    return view('welcome');
});
Route::get('/document/act', function () {
    return view('act');
});






