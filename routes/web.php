<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController; // Não vi no video

Route::get('/', function () {
    return view('welcome');
});

// Contas
Route::get('/conta',      [ContaController::class, 'index'])   ->name('conta.index');
Route::get('/create',     [ContaController::class, 'create'])  ->name('conta.create');
Route::post('/store',     [ContaController::class, 'store'])   ->name('conta.store');
Route::get('/show/{conta}',[ContaController::class, 'show'])   ->name('conta.show');
Route::get('/edit',       [ContaController::class, 'edit'])    ->name('conta.edit');
Route::put('/update',     [ContaController::class, 'update'])  ->name('conta.update');
Route::delete('/destroy', [ContaController::class, 'destroy']) ->name('conta.destroy');