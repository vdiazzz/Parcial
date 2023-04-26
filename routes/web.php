<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/estudiante', [EstudianteController::class, 'index'])->name('estudiante.index');
Route::get('/estudiante/create', [EstudianteController::class, 'create'])->name('estudiante.create');
Route::post('/estudiante', [EstudianteController::class, 'store'])->name('estudiante.store');
Route::get('/estudiante/{id}/edit', [EstudianteController::class, 'edit'])->name('estudiante.edit');
Route::put('/estudiante/{id}', [EstudianteController::class, 'update'])->name('estudiante.update');
Route::delete('/estudiantes/{estudiante}', [EstudianteController::class, 'destroy'])->name('estudiante.destroy');



