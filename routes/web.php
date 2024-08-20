<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/',[HomeController::class,'Home']);
Route::get('/Register',[AuthController::class,'Register']);
Route::get('/Welcome',[AuthController::class,'Welcome']);

