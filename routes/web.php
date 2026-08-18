<?php

use App\Http\Controllers\commentcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\TagController;
use App\Models\comment;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/job', action: [JobController::class, 'index']);
Route::get('/blog',[Postcontroller::class,'index']);
Route::get('/blog/create',[Postcontroller::class,'create']);
Route::get('/blog/delete',[Postcontroller::class,'delete']);
Route::get('/blog/{id}',[Postcontroller::class,'show']);

Route::get('/comments',[commentcontroller::class,'index']);
Route::get('/comments/create',[commentcontroller::class, 'create']);

Route::get('/tags',[TagController::class,'index']);
Route::get('/tags/create',[TagController::class,'create']);

Route::get('/tags/test-many',[TagController::class,'testManyToMany']);
