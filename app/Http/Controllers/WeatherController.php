<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

class WeatherController extends Controller
{
    public function index(Request $request, WeatherService $weatherService)
    {
        $city = $request->input('city', 'Warsaw');
        $data = $weatherService->getWeatherForCity($city);
        return view('weather', ['data' => $data, 'city' => $city]);
    }
}
