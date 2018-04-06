<?php

class ExceptionHandlingBehaviorDecorator
{

    private $reverseBehavior;

    public function __construct(ReverseBehavior $reverseBehavior)
    {
        $this->reverseBehavior = $reverseBehavior;
    }

    public function exception($input)
    {

        if ($this->reverseBehavior->apply($input) == null) {
            throw new Exception('Please input a string');
        }

        try {
            "Echo";
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
}
