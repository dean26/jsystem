<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

class WeatherController extends Controller
{
    public function index(Request $request, WeatherService $weatherService)
    {
        $data = $weatherService->getWeatherForCity('Torun');
        return view('weather', ['data' => $data]);
    }
}
