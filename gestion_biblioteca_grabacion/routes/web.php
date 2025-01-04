<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('libros',[ApiController::class,'index']);
Route::post('/libros',[ApiController::class,'store']);
