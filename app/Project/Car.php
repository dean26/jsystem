<?php

namespace App\Project;

use App\Project\Interfaces\EngineInterface;


class Car {

    public function __construct(private readonly EngineInterface $engine)
    { 
    }

    public function start(): ?string 
    {
        return $this->engine->start();
    }

    public function stop(): ?string 
    {
        return $this->engine->stop();
    }
}