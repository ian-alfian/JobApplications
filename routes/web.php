<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobApplicationController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('applications', JobApplicationController::class);
