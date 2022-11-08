<?php
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: *');
// header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Private-Network: true');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdministratorController;
// use App\Models\Producer;
// use App\Http\Controllers\CompanyController;
// use App\Http\Controllers\ProducerController;
// use App\Http\Controllers\PumpController;
// use App\Http\Controllers\TypeController;
// use App\Http\Controllers\CategoryController;

Route::get('/profile', function () {
    return "Administrator";
});
Route::get('dashboard',[AdministratorController::class, 'dashboard']);
Route::post('login',[AdministratorController::class, 'login'])->name('administratorLogin');
Route::post('register',[AdministratorController::class, 'register'])->name('administratorRegister');

Route::group( ['middleware' => ['auth:admin-api','scopes:admin'] ],function(){
    Route::post('logout', [AdministratorController::class, 'logout']);
    
    Route::get('employers',[AdministratorController::class, 'employers']);
    Route::get('managers',[AdministratorController::class, 'managers']);
    // Route::get('pumps', [\App\Http\Controllers\PumpController::class, 'index'])->name('adminPump');
    Route::apiResource('pumps', '\App\Http\Controllers\PumpController');
    Route::apiResource('producers', '\App\Http\Controllers\ProducerController');
    Route::apiResource('categories', '\App\Http\Controllers\CategoryController');
    Route::apiResource('types', '\App\Http\Controllers\TypeController');
    Route::apiResource('companies', '\App\Http\Controllers\CompanyController');
    Route::apiResource('employers', '\App\Http\Controllers\EmployerController');
    Route::apiResource('managers', '\App\Http\Controllers\ManagerController');
});




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// Route::get('/producers', [ProducerController::class, 'index']);
// Route::post('/producers', [ProducerController::class, 'store']);
// Route::get('/pumps', [PumpController::class, 'index']);
// Route::get('/dashboard', [AdministratorController::class, 'dashboard']);
// Route::get('/types', [TypeController::class, 'index']);
// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/companies', [CompanyController::class, 'index']);
// Route::post('/companies', [CompanyController::class, 'store']);
// Route::put('/companies/{company}', [CompanyController::class, 'update']);
// Route::delete('/companies/{company}', [CompanyController::class, 'destroy']);
//delete#################
// Route::get('/companies', function(){
//     return Company::select('id','name')->get();
// });


