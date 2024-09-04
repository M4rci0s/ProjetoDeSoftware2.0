<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\PhotoController;
use App\Models\Cadastro;
use App\Http\Controllers\SearchController;


Route::get('/', [CadastroController::class, 'index']);
Route::get('/tec', [CadastroController::class, 'tecnicos']);

Route::post('/store', [CadastroController::class, 'store']);
Route::get('/create', [CadastroController::class, 'create']);
Route::delete('/delete', [CadastroController::class, 'delete']);
Route::put('/update', [CadastroController::class, 'update']);

Route::get('upload', [PhotoController::class, 'create']);
Route::post('upload', [PhotoController::class, 'store']);

Route::get('/searchTecnico', [SearchController::class, 'search'])->name('searchTecnico');
Route::get('/tecnicos', [SearchController::class, 'searchTecnico'])->name('searchTecnicoAlf');
