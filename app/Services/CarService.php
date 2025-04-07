<?php 

namespace App\Services;

class CarService
{

    public function createCar(): \App\Project\Car
    {
        $engine = new \App\Project\FerrariEngine();
        return new \App\Project\Car($engine);
    }

    /*
    
    1. Dodaj nowy nowy typ silnika, np Lambo, Ford etc.
    2. Do interfejsu EngineInterface dodaj metode stop()
    3. Dodaj serwis, ktory bedzie tworzyl auto z silnikiem dodanym w punkcie 1.
    4. Dodaj endpoint, który zwróci w jsonie dane pojawiajáce sie starcie i zatrzymaniu auta.

    */

}