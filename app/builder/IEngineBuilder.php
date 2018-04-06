<?php

namespace App\Builder;

interface IEngineBuilder
{

    public function BuildValves();
    public function BuildSparkplug();
    public function BuildPiston();
    public function getResult();

}
