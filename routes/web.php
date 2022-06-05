<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;


/*
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homeadmin', function () {
    return view('admin.main');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/beranda', [BerandaController::class, 'index']);


Route::resource('product', ProductController::class);

//route employee
Route::resource('/employee', EmployeeController::class);

//route supplier
Route::resource('/supplier', SupplierController::class);

Route::resource('customer', CustomerController::class);
