<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PumpController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\PriceController;


Route::get('/app', function(){
    return view('app');
});
Route::get('/admin', function(){
    return view('admin');
});
//#############################################
Route::get('/roger', function(){
    return Http::get('pompyapi.online:8000/admin/pumps');
});



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


Route::get('/houseprice', function () {
    return view('houseprice');
})->name('houseprice');
Route::post('/price', [PriceController::class, 'show'])->name('price.show');
