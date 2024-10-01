<?php

use App\Http\Controllers\BdController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BdController::class, 'homepage']);
Route::get('/offres', [BdController::class, 'offres']);
Route::get('/admin', [BdController::class, 'admin']);
Route::post('/admin', [BdController::class, 'admin']);

Route::get('/remplir', function () {
    return view('remplir');
});

