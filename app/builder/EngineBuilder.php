<?php
namespace App\Builder;

use App\Builder\IEngineBuilder;
use App\Builder\Vehicle;
require_once 'Vehicle.php';
require_once 'IEngineBuilder.php';





class EngineBuilder implements IEngineBuilder
{

    private $vehicle;

    public function __construct()
    {
        $this->vehicle = new Vehicle();
    }

    public function buildValves()
    {
        return $this->vehicle->engine = "Valves";
    }

    public function buildSparkplug()
    {
        return $this->vehicle->engine = "Sparkplug";
    }

    public function buildPiston()
    {
        return $this->vehicle->engine = "Piston";
    }

    public function getResult()
    {
        return $this->vehicle;
    }

}
