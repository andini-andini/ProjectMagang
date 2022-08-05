<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/departement', [App\Http\Controllers\DepartementController::class, 'index'])->name('departement');
Route::resource('departement', DepartementController::class);
Route::resource('location', LocationController::class);
Route::resource('manufacture', ManufactureController::class);
Route::resource('category', CategoryController::class);
Route::resource('user', UserController::class);
Route::resource('supplier', SupplierController::class);
