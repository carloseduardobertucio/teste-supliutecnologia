<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index']);


Route::middleware('auth:sanctum')->get('/dashboard', [PageController::class, 'dashboard']);


Route::middleware('auth:sanctum')->get('/dashboard/adicionar/album/', [PageController::class, 'adicionar_album']);

Route::middleware('auth:sanctum')->get('/dashboard/edit/album/{id}', [PageController::class, 'editar_album']);

Route::middleware('auth:sanctum')->get('/dashboard/deleter/album/{id}', [PageController::class, 'deletar_album']);


Route::middleware('auth:sanctum')->get('/dashboard/adicionar/musica/', [PageController::class, 'adicionar_music']);
Route::middleware('auth:sanctum')->get('/dashboard/edit/musica/{id}', [PageController::class, 'editar_music']);
Route::middleware('auth:sanctum')->get('/dashboard/deleter/musica/{id}', [PageController::class, 'deletar_music']);


Route::middleware('auth:sanctum')->post('/dashboard/adicionar/album/', [EventController::class, 'register_album']);

Route::middleware('auth:sanctum')->put('/dashboard/edit/album/{id}', [EventController::class, 'update_album']);

Route::middleware('auth:sanctum')->delete('/dashboard/delete/album/{id}', [EventController::class, 'destroy_album']);


Route::middleware('auth:sanctum')->post('/dashboard/adicionar/musica/', [EventController::class, 'register_music']);

Route::middleware('auth:sanctum')->put('/dashboard/delete/musica/{id}', [EventController::class, 'update_music']);

Route::middleware('auth:sanctum')->delete('/dashboard/delete/musica/{id}', [EventController::class, 'destroy_music']);