<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


# Backend Route

Route::get('admin',[BackendController::class,'index'])->name('backend');


# Frontend Route

Route::get('/',[FrontendController::class,'index'])->name('frontend');