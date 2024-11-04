<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\JobApplicationController;

Route::get('/applications', [JobApplicationController::class, 'index'])->name('applications.index');
Route::post('/applications', [JobApplicationController::class, 'store'])->name('applications.store');
Route::get('/applications/create', [JobApplicationController::class, 'create'])->name('applications.create');
Route::post('/applications', [JobApplicationController::class, 'store'])->name('applications.store');
Route::get('/applications/{id}/edit', [JobApplicationController::class, 'edit'])->name('applications.edit');
Route::put('/applications/{id}', [JobApplicationController::class, 'update'])->name('applications.update');
Route::delete('/applications/{id}', [JobApplicationController::class, 'destroy'])->name('applications.destroy');
Route::resource('applications', JobApplicationController::class);
