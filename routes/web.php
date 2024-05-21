<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('create', [CrudController::class, 'create'])->name('crud.create');
Route::get('/', [CrudController::class, 'index'])->name('crud.view');
Route::post('store', [CrudController::class, 'store'])->name('crud.store');
Route::get('edit/{id}', [CrudController::class, 'edit'])->name('crud.edit');
Route::post('update/{id}', [CrudController::class, 'update'])->name('crud.update');
Route::any('delete/{id}', [CrudController::class, 'destroy'])->name('crud.delete');

Route::resource('project', ProjectController::class);
