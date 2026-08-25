<?php

use App\Http\Controllers\api\PostApiController;
use Illuminate\Support\Facades\Route;


// use App\Http\Controllers\commentcontroller;
// use App\Http\Controllers\Postcontroller;
// use App\Http\Controllers\TagController;
// use Illuminate\Support\Facades\Route;


// Route::post('/blog',[Postcontroller::class,'create']);
// Route::delete('/blog/{id}',[Postcontroller::class,'delete']);


Route::apiResource('post', PostApiController::class);
