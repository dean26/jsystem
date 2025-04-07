<?php 

namespace App\Services;

use App\Project\Car;
use App\Project\LamboEngine;

class LamboService
{

    public function createCar(): Car
    {
        $engine = new LamboEngine();
        return new Car($engine);
    }

}