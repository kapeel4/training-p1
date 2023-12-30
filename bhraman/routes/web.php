<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\HeaderController;
use App\Http\Controllers\Backend\EmployeeController;

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

// for header
Route::get('/home/header',[HeaderController::class,'index'])->name('header.index');
Route::get('/home/header/create',[HeaderController::class,'create'])->name('header.create');
Route::post('/home/header/store',[HeaderController::class,'store'])->name('header.store');
Route::get('/home/header/{id}/edit',[HeaderController::class,'edit'])->name('header.edit');
Route::post('/home/header/{id}/update',[HeaderController::class,'update'])->name('header.update');
Route::get('/home/header/{id}/destroy',[HeaderController::class,'destroy'])->name('header.destroy');


// for employee
Route::get('/home/employee',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/home/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/home/employee/store',[EmployeeController::class,'store'])->name('employee.store');
