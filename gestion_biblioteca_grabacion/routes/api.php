<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Rutas de la API
Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/libros',[ApiController::class,'index']);
Route::post('/libros',[ApiController::class,'store']);
Route::delete('/libros/{id}',[ApiController::class,'destroy']);

