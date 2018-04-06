<?php

namespace App\Builder;

use App\Builder\IVehicleBuilder;
use App\Builder\Vehicle;

require_once 'Vehicle.php';
require_once 'IVehicleBuilder.php';


class CarBuilder implements IVehiclebuilder
{

    private $vehicle;
    private $engine;

    public function __construct(IEngineBuilder $engine)
    {
        $this->vehicle = new Vehicle();
        $this->engine = $engine;
    }

    public function BuildEngine()
    {
        $this->vehicle->engine = $this->engine->buildSparkplug();
    }

    public function BuildWheels()
    {
        $this->vehicle->wheel = "2";
    }

    public function BuildSteering()
    {
        $this->vehicle->steering = "Friction Wheel";
    }

    public function BuildBrakeSystem()
    {
        $this->vehicle->brakeSystem = "Caliper";
    }

    public function getResult()
    {
        return $this->vehicle;
    }

}
