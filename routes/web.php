<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//  User routes :
Route::get('/', [UserController::class, 'homepage']);
Route::get('/offres', [UserController::class, 'offres']);

//Admin routes :
Route::get('/admin', [AdminController::class, 'admin']);
Route::post('/admin', [AdminController::class, 'adminLogin']);
Route::post('/admin', [AdminController::class, 'adminLogout']);


// Route::get('/remplir', function () {
//     return view('remplir');
// });

