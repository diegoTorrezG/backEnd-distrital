<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get("/saludo", function (Request $request) {
    
    $message = ["mensaje" => "hola que hace"];
    
    return response()->json ($message);
});


Route::post("/libro", function (Request $request) {
    
    $message = ["book" => "100 años de soledad"];
    
    return response()->json ($message);
});