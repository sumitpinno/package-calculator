<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/calculator', function () {
    echo "Hello from calculator.";
    // return view('welcome');
});

Route::get('/add/{a}/{b}', [LP\Calculator\CalculatorController::class, 'add']);
Route::get('/sub/{a}/{b}', [LP\Calculator\CalculatorController::class, 'sub']);
