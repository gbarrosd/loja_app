<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/orcamentos',[\App\Http\Controllers\OrcamentoController::class, 'display'])->name('orcamento:list');
Route::get('/create/orcamento',[\App\Http\Controllers\OrcamentoController::class, 'createForm'])->name('orcamento:create');
Route::post('/create/orcamento',[\App\Http\Controllers\OrcamentoController::class, 'store'])->name('orcamento:store');
Route::get('/orcamento/view/{id}',[\App\Http\Controllers\OrcamentoController::class, 'visualizar'])->name('orcamento:view');
Route::post('/orcamento/update/{id}',[\App\Http\Controllers\OrcamentoController::class, 'update'])->name('orcamento:update');

Route::get('/notas',[\App\Http\Controllers\NotaController::class, 'display'])->name('nota:list');
Route::get('/create/nota',[\App\Http\Controllers\NotaController::class, 'createForm'])->name('nota:create');
Route::post('/create/nota',[\App\Http\Controllers\NotaController::class, 'store'])->name('nota:store');
Route::get('/nota/view/{id}',[\App\Http\Controllers\NotaController::class, 'visualizar'])->name('nota:view');
Route::post('/nota/update/{id}',[\App\Http\Controllers\NotaController::class, 'update'])->name('nota:update');