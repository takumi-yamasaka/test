<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Count\Http\Controllers\CountController;

Route::group(['namespace' => 'App\Modules\Count\Http\Controllers', 'as' => 'count.'], function() {
    Route::get('/count', [CountController::class, 'index'])->name('index');
    Route::post('/count/increment', [CountController::class, 'increment'])->name('increment');
    Route::post('/count/decrement', [CountController::class, 'decrement'])->name('decrement');
});