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

//rutas de autenticacion
Route::middleware(['auth:sanctum'])->group(function (){
    //obtener info de usu
    Route::get('/user',[AuthController::class,'user']);
    //cerrar sesión
    Route::post('/logout',[AuthController::class,'logout']);
});

Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/register',[AuthController::class,'register']);

