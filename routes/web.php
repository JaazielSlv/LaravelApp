<?php

use App\Http\Controllers\Admin\{SupportController, SupportControllers};
use App\Http\Controllers\site\sitecontrollers;
use Illuminate\Support\Facades\Route;

Route::delete('/support/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
Route::put('/support/{id}', [SupportController::class, 'update'])->name('supports.update');
Route::get('/support/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('/support/create', [SupportController::class, 'create'])->name('supports.create');
Route::POST('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');


Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [sitecontrollers::class, 'contact']);


Route::get('/', function () {
    return view('welcome');
});
