<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FspController;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Http\Controllers\ResourceController;

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
// Route::get('/test/env', function () {
//     dd(env('customers')); // Dump 'db' variable value one by one
// });

Route::get('/', function () {
    $customers = Customer::all();

    return view('index', ['customers'=> $customers]);
});

Route::resource('customers','App\Http\Controllers\CustomerController');
Route::get('/resources', [FspController::class, 'show'])->name('details');



