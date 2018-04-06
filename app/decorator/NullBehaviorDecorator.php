<?php

class NullBehaviorDecorator
{

    private $reverseBehavior;
    private $logging;

    public function __construct(LoggingModifyBehaviorDecorater $logging, ReverseBehavior $reverseBehavior)
    {
        $this->reverseBehavior = $reverseBehavior;
        $this->logging = $logging;
    }

    public function rejectExecution($logging)
    {
        return exit();
    }

}
