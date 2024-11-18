<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\PhotoController;
use App\Models\Cadastro;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\TermosController;
use App\Models\Tecnico;
use App\Http\Controllers\OrdemServicosController;

Route::get('/', [CadastroController::class, 'index']);
Route::get('/tec', [CadastroController::class, 'tecnicos']);

Route::post('/store', [CadastroController::class, 'store']);
Route::get('/create', [CadastroController::class, 'create']);
Route::delete('/delete', [CadastroController::class, 'delete']);
Route::put('/update', [CadastroController::class, 'update']);

Route::get('/upload', [PhotoController::class, 'create']);
Route::post('/upload', [PhotoController::class, 'store']);

Route::get('/searchTecnico', [SearchController::class, 'search'])->name('searchTecnico');
Route::get('/tecnicos', [SearchController::class, 'searchTecnico'])->name('searchTecnicoAlf');

Route::get('/contrato/{id}', [TecnicoController::class, 'detalhes'])->name('contrato.detalhes');
Route::get('/tecnicos', [TecnicoController::class, 'index'])->name('tecnicos.index');
Route::post('/ratings', [RatingController::class, 'store'])->name('rating.store');
Route::get('/termos-de-uso', [TermosController::class, 'index'])->name('termos.de.uso');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/uploadimg', function () {
    return view('uploadimg');
})->middleware('auth');

Route::get('/', [OrdemServicosController::class, 'index']);
Route::post('/avaliar', [OrdemServicosController::class, 'avaliar']);
Route::get('/media', [OrdemServicosController::class, 'media']);
