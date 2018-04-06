<?php
use App\Builder\IVehicleBuilder;

class BuilderTest extends \PHPUnit\Framework\TestCase
{
    public function testEngine()
    {
        $engine = new \App\Builder\EngineBuilder;

        $engine->buildValves();
        $this->assertEquals($engine->buildValves(), 'Valves');

        $engine->buildSparkplug();
        $this->assertEquals($engine->buildSparkplug(), 'Sparkplug');

        $engine->buildPiston();
        $this->assertEquals($engine->buildPiston(), 'Piston');

    }

    public function testCar()
    {
        $engine = new \App\Builder\CarBuilder;

        $engine->BuildEngine();
        $this->assertEquals($engine->BuildEngine(), 'Sparkplug');

        $engine->BuildWheels();
        $this->assertEquals($engine->BuildWheels(), '2');

        $engine->BuildBrakeSystem();
        $this->assertEquals($engine->buildValves(), 'Friction Wheel');

        $engine->BuildSteering();
        $this->assertEquals($engine->BuildSteering(), 'Caliper');
    }

}
