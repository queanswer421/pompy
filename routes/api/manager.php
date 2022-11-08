<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ManagerController;

Route::get('/profile', function () {
    return "Manager";
});

Route::post('login',[ManagerController::class, 'login'])->name('managerLogin');
Route::post('register',[ManagerController::class, 'register'])->name('managerRegister');

Route::group( ['middleware' => ['auth:manager-api','scopes:manager'] ],function(){
    Route::post('logout', [ManagerController::class, 'logout']);
    Route::get('dashboard',[ManagerController::class, 'dashboard']);
    Route::get('employers', [ManagerController::class, 'employers'])->name('manager.employers');
});
