<?php
namespace App\Builder;

use App\Builder\IVehicleBuilder;
use App\Builder\Vehicle;
require_once 'Vehicle.php';
require_once 'IVehicleBuilder.php';



class VehicleBuilder implements IVehiclebuilder
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
        $this->vehicle->engine = $this->engine->buildValves();
    }

    public function BuildWheels()
    {
        $this->vehicle->wheel = "5";
    }

    public function BuildSteering()
    {
        $this->vehicle->steering = "ha";
    }

    public function BuildBrakeSystem()
    {
        $this->vehicle->brakeSystem = "dang";
    }

    public function getResult()
    {
        return $this->vehicle;
    }

}
