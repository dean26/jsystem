<?php

namespace App\Project;

use App\Project\Interfaces\EngineInterface;

class MercedesEngine implements EngineInterface
{
    public function start(): string
    {
        return "Merc ziuuu";
    }

    public function stop(): string
    {
        return "Stop....";
    }
}

