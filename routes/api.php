<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\InvoiceController;
use App\Http\Controllers\AuthController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::prefix('v1')->group(function(){

// });

    Route::get('/users', [UserController::class,'index']);
    Route::get('/users/{user}', [UserController::class,'show']);

    Route::get('/invoices', [InvoiceController::class, 'index'])->middleware('auth:sanctum');
    Route::get('/invoices/{invoice}', [InvoiceController::class, 'show']);
    Route::post('/invoices', [InvoiceController::class, 'store']);
    Route::put('/invoices/{invoice}', [InvoiceController::class, 'update']);

    Route::post('/login', [AuthController::class, 'login']);

