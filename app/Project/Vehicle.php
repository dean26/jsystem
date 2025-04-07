<?php

namespace App\Project;

abstract class Vehicle
{
    protected string $brand;

    public function __construct(string $brand){
        $this->brand = $brand;
    }

    abstract public function move(): string;
}