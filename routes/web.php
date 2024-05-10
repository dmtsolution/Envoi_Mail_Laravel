<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/',[IndexController::class, 'Index'])->name('index');
Route::post('/envoimail',[IndexController::class, 'Envoi'])->name('envoimail');


