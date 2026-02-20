<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductoController;


Route::get('/', function () {
    return view('welcome');
});


Route::get("/index", function(){
    return view('inicio');
});


Route::get("/suma", [SumaController::class, "index"]);

Route::post("/suma", [SumaController::class, "suma"]);

Route::get("/productos", [ProductoController::class, "index"]);