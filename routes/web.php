<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OffresController;


//  User routes :
Route::get('/', [UserController::class, 'homepage']);
Route::get('/offres', [UserController::class, 'offres']);

//Admin routes :
Route::get('/admin', [AdminController::class, 'admin']);
Route::post('/admin', [AdminController::class, 'adminLogin']);
Route::post('/adminLogout', [AdminController::class, 'adminLogout']);

//offres routes :
Route::post('/offrePublier', [OffresController::class, 'publierOffre']);

