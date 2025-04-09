<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderController;

Route::middleware('auth:sanctum')->prefix('api-orders')->name('orders.')->controller(OrderController::class)
->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::put('{order}', 'update')->name('update');
    Route::delete('{order}', 'destroy')->name('destroy');
});