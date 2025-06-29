<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MasterMakeController;
use App\Http\Controllers\Api\MasterModelController;
use App\Models\MasterMake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('hello', function (Request $request) {
    return 'text hello';
});

Route::post('hello', function (Request $request) {
    return 'post hello';
});

Route::post('/login',[AuthController::class,'login']);

Route::post('/register',[AuthController::class,'register']);

Route::get('/profile',[AuthController::class,'getprofile']);

Route::apiResource('makes',MasterMakeController::class);

Route::apiResource('makes.models',MasterModelController::class);