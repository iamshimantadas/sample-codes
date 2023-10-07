<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\authController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json([ 'status'=>true , 'message' => 'Token is valid']);
});

Route::post('/register',[authController::class,'register']);
Route::post('/login',[authController::class,'login']);

// Route::middleware('auth:api')->get('/validate-token', function () {
//     return response()->json([ 'status'=>true , 'message' => 'Token is valid']);
// });
