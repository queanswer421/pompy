<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\EmployerController;

Route::get('/profile', function () {
    return "Employer";
});

Route::post('login',[EmployerController::class, 'login'])->name('employerLogin');
Route::post('register',[EmployerController::class, 'register'])->name('employerRegister');

Route::group( ['middleware' => ['auth:employer-api','scopes:employer'] ],function(){
    Route::post('logout', [EmployerController::class, 'logout']);
    Route::get('dashboard',[EmployerController::class, 'dashboard']);
});
