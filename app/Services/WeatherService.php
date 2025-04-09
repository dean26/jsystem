<?php 

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{

    public function getWeatherForCity(string $city): array
    {
        $key = config('weatherapi.key');
        ds($key);

        $response = Http::get(
            "http://api.weatherapi.com/v1/current.json",
            [
                'key' => $key,
                'q' => $city
            ]
        ); 

        if($response->failed()){
            throw new \Exception('Blad...');
        }

        return $response->json();
    }

}