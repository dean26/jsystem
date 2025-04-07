<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\OrderController;

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
