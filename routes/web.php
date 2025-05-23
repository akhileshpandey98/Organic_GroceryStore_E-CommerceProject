<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [homeController::class,'index']);
Route::get('login', [homeController::class, 'login']);
Route::get('signupform', [homeController::class, 'signup']);
Route::get('about', [homeController::class, 'about']);
Route::get('contact', [homeController::class, 'contact']);
