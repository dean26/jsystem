<?php 

namespace App\Project\Interfaces;

interface EngineInterface
{
    public function start(): ?string;
    public function stop(): ?string;
}
