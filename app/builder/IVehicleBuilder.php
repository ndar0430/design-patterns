<?php
namespace App\Builder;


interface IVehicleBuilder
{

    public function BuildEngine();
    public function BuildWheels();
    public function BuildSteering();
    public function BuildBrakeSystem();
    public function getResult();

}
