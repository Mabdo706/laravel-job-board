<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get(uri: '/job', action: [JobController::class, 'index']);
