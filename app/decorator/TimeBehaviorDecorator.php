<?php
require_once 'IModifyBehavior.php';

class TimeBehaviorDecorator
{

    private $reverseBehavior;

    public function __construct(ReverseBehavior $reverseBehavior)
    {
        $this->reverseBehavior = $reverseBehavior;
    }

    public function calculateExecutionTime($input)
    {
        $executionStartTime = microtime(true);
        $reverseMethod = $this->reverseBehavior->apply($input);
        $executionEndTime = microtime(true);

        $executionTime = $executionEndTime - $executionStartTime;

        return $executionTime;
    }

}
