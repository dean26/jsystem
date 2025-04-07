<?php

namespace App\Project;

use App\Project\Interfaces\EngineInterface;

class FerrariEngine implements EngineInterface
{
    public function start(): string
    {
        return "Ferrari brum brum";
    }

    public function stop(): string
    {
        return "Stop....";
    }
}

