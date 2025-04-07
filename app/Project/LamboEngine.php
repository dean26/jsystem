<?php

namespace App\Project;

use App\Project\Interfaces\EngineInterface;

class LamboEngine implements EngineInterface
{
    public function start(): string
    {
        return "Lambo wziuuu";
    }

    public function stop(): string
    {
        return "Stop....";
    }
}
