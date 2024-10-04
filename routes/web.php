<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OffresController;


//  User routes :
Route::view('/', 'homepage');/*->name('homepage') and use {{route('homepage')}}; */
Route::get('/offres', [OffresController::class, 'offres']);;

//Admin routes :
Route::view('/admin', 'admin');;
Route::post('/admin', [AdminController::class, 'adminLogin']);
Route::post('/adminLogout', [AdminController::class, 'adminLogout']);

//offres routes :
Route::get('/formulairOffre', [OffresController::class, 'formulair']);
Route::get('/edit/{offre}', [OffresController::class, 'edit_offre'])->name('edit_offre');
Route::put('/edit/{offre}', [OffresController::class, 'update_offre']);
// Route::post('/formulairOffre', [OffresController::class, 'publierOffre']);

