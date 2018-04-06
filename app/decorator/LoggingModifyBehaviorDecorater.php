<?php

class LoggingModifyBehaviorDecorater
{

    private $reverseBehavior;

    public function __construct(ReverseBehavior $reverseBehavior)
    {
        $this->reverseBehavior = $reverseBehavior;
    }

    public function apply($input)
    {
        $reverse = "Before \n" . $this->reverseBehavior->apply($input) . "\n After";
        return $reverse;
    }

}
