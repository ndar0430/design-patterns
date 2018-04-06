<?php
namespace App\Builder;

use App\Builder\EngineBuilder;
use App\Builder\VehicleDirector;
use App\Builder\VehicleBuilder;
use App\Builder\MotorcycleBuilder;
use App\Builder\CarBuilder;

require_once 'EngineBuilder.php';
require_once 'VehicleDirector.php';
require_once 'VehicleBuilder.php';
require_once 'MotorcycleBuilder.php';
require_once 'CarBuilder.php';


class Vehicle
{
    public $engine;
    public $wheel;
    public $steering;
    public $brakeSystem;

    public function Show(){
        echo $this->engine;
    }
}


$engineBuilder = new EngineBuilder();
$vehicleBuilder = new VehicleBuilder($engineBuilder);
$motorBuilder = new MotorcycleBuilder($engineBuilder);
$carBuilder = new CarBuilder($engineBuilder);
$vehicleDirector = new VehicleDirector($motorBuilder);
$motor = $vehicleDirector->build();
$motor->Show();
