<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TechwareController;
use App\Http\Controllers\CategoryController;

Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('techware',[TechwareController::class,'index'])->name('techware.index');
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/show/{id}',[CategoryController::class,'show'])->name('category.show');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::delete('category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

Route::get('link',[TechwareController::class,'link'])->name('link.index');