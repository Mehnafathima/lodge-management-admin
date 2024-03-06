<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout',[\App\Http\Controllers\ApiController::class,'logOut']);
    Route::post('/getcustomer',[\App\Http\Controllers\ApiController::class,'getBranchCustomer']);
    Route::match(['get', 'post'], '/addNewCustomers', [\App\Http\Controllers\ApiController::class, 'addNewCustomer']); //got an error when post method was used
    Route::match(['get', 'post'], '/saveWork', [\App\Http\Controllers\ApiController::class, 'saveWork']);
    Route::match(['get', 'post'], '/getbranchhistory', [\App\Http\Controllers\ApiController::class, 'getbranchhistory']); 


});
Route::post('/login', [App\Http\Controllers\ApiController::class, 'logIn']);

