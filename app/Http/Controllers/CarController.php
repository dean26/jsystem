<?php

namespace App\Http\Controllers;

use App\Services\CarService;
use Illuminate\Http\Request;
use App\Services\LamboService;

class CarController extends Controller
{
    public function start(CarService $carService)
    {
        $car = $carService->createCar();
        return response()->json(
            [
                $car->start()
            ]
        );
    }

    public function lambo(LamboService $lamboService)
    {
        $car = $lamboService->createCar();
        return response()->json(
            [
                $car->start(),
                $car->stop()
            ]
        );
    }
}
