<?php

use App\Http\Controllers\BioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalponController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\WorkshopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/bio', [BioController::class, 'index'])
        ->name('bio');

Route::get('/galpon', [GalponController::class, 'index'])
        ->name('galpon');

Route::get('/workshops', [WorkshopController::class, 'index'])
        ->name('workshops');

Route::get('/contact', [ContactController::class, 'index'])
        ->name('contact');

    // routes/web.php
Route::get('/performance/{performance}', [PerformanceController::class, 'show'])
     ->name('performances.show');


Route::get('/test', function () {
    return view('test');
});
