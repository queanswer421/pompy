<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PumpController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ProducerController;

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
Route::resource('/pump', PumpController::class);
Route::resource('/house', HouseController::class);
Route::resource('/producer', ProducerController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/search', function () {
//     return view('search');
// });
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/price', function () {
    return view('price');
})->name('price');
