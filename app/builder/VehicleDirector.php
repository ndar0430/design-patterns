<?php
namespace App\Builder;

class VehicleDirector
{

    private $vehicleBuilder;

    public function __construct(IVehicleBuilder $vehicleBuilder)
    {
        $this->vehicleBuilder = $vehicleBuilder;
    }

    public function build()
    {
        $this->vehicleBuilder->BuildEngine();
        $this->vehicleBuilder->BuildWheels();
        $this->vehicleBuilder->BuildSteering();
        $this->vehicleBuilder->BuildBrakeSystem();
        return $this->vehicleBuilder->getResult();

    }

}
