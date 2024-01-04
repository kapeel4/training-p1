<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\HeaderController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\Bhraman_detailController;
use App\Http\Controllers\Backend\DesignationController;
use App\Http\Controllers\Backend\FisalyearController;
use App\Http\Controllers\Backend\Bhraman_billController;

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

Route::get('language/{lang}', [App\Http\Controllers\HomeController::class,'switchLang'])->name('LangChange');
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

// for designation
Route::get('/home/designation',[DesignationController::class,'index'])->name('designation.index');
Route::get('/home/designation/create',[DesignationController::class,'create'])->name('designation.create');
Route::post('/home/designation/store',[DesignationController::class,'store'])->name('designation.store');
Route::get('/home/designation/{id}/edit',[DesignationController::class,'edit'])->name('designation.edit');
Route::post('/home/designation/{id}/update',[DesignationController::class,'update'])->name('designation.update');
Route::get('/home/designation/{id}/destroy',[DesignationController::class,'destroy'])->name('designation.destroy');

// for fiscal
Route::get('/home/fiscal',[FisalyearController::class,'index'])->name('fiscal.index');
Route::get('/home/fiscal/create',[FisalyearController::class,'create'])->name('fiscal.create');
Route::post('/home/fiscal/store',[FisalyearController::class,'store'])->name('fiscal.store');
Route::get('/home/fiscal/{id}/edit',[FisalyearController::class,'edit'])->name('fiscal.edit');
Route::post('/home/fiscal/{id}/update',[FisalyearController::class,'update'])->name('fiscal.update');
Route::get('/home/fiscal/{id}/destroy',[FisalyearController::class,'destroy'])->name('fiscal.destroy');


// for employee
Route::get('/home/employee',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/home/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/home/employee/store',[EmployeeController::class,'store'])->name('employee.store');
Route::get('/home/employee/{id}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
Route::post('/home/employee/{id}/update',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/home/employee/{id}/destroy',[EmployeeController::class,'destroy'])->name('employee.destroy');


//for bharaman detail
Route::get('/home/bharama',[Bhraman_detailController::class,'index'])->name('bharam.index');
Route::get('/home/bharama/create',[Bhraman_detailController::class,'create'])->name('bharam.create');
Route::post('/home/bharama/store',[Bhraman_detailController::class,'store'])->name('bharam.store');

// for bhraman bill
Route::get('/home/bharama/{id}/bill',[Bhraman_billController::class,'index'])->name('bharam.bill');
Route::post('/home/bharama/{id}/bill/store',[Bhraman_billController::class,'store'])->name('bharam_bill.store');









