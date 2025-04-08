<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EngineController;
use App\Http\Controllers\OrderDbController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(Request $request) {
    $name = $request->input('name');
    //ds("Hello!");
    //ds($name);
    //var_dump($name);
    //xdebug_break();
    return response()->json([
        'time' => time(), 
    'name' => $name]);
});

Route::get('/cars/start', [CarController::class, 'start']);
Route::get('/cars/lambo', [CarController::class, 'lambo']);
Route::get('/order', [WebController::class, 'order']);
Route::get('/payment', [WebController::class, 'payment']);

Route::prefix('orders-db')->name('orders-db.')->controller(OrderDbController::class)
->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('show/{id}', 'show')->name('show');
    Route::get('create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('{id}/edit', 'edit')->name('edit');
    Route::put('{id}', 'update')->name('update');
    Route::delete('{id}', 'destroy')->name('destroy');
});

Route::prefix('engines')->name('engines.')->controller(EngineController::class)
->group(function () {
    Route::get('/', 'index')->name('index');
});