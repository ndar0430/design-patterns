<?php
class InterceptionBehaviorDecorator
{

    private $logging;

    public function __construct(LoggingModifyBehaviorDecorater $logging)
    {
        $this->logging = $logging;
    }

    public function intercept($input)
    {

        if ($input == "test") {
            $intercept = $this->logging->apply($input);
            return $intercept;
        } else {
            return "False";
        }
    }
}
