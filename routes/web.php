<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OffresController;


//  User routes :
Route::view('/', 'homepage');/*->name('homepage') and use {{route('homepage')}}; */

//Admin routes :
Route::view('/login', 'admin')->name('login');
Route::post('/login', [AdminController::class, 'adminLogin']);
Route::post('/adminLogout', [AdminController::class, 'adminLogout']);

//offres routes :
Route::get('/offres', [OffresController::class, 'offres']);
Route::post('/offrePublier', [OffresController::class, 'publierOffre']);
Route::get('/pdfDownload{pdf}', [OffresController::class, 'pdfDownload'])->name('pdf.download');
Route::get('/formulairOffre', [OffresController::class, 'formulair'])->middleware('auth');
Route::get('/edit/{offre}', [OffresController::class, 'edit_offre'])->name('edit_offre');
Route::put('/edit/{offre}', [OffresController::class, 'update_offre']);
Route::delete('/delete/{offre}', [OffresController::class, 'delete_offre'])->name('delete_offre');

