<?php

class ClickStatus
{
    public $middle;
    public $right;
    public $left;
    public $null;
}

abstract class ClickChecker
{
    protected $successor;

    abstract public function check(ClickStatus $clickStatus);

    public function succeedWith(ClickChecker $successor)
    {
        $this->successor = $successor;
    }
    public function next(ClickStatus $click)
    {
        if ($this->successor) {
            $this->successor->check($click);
        }
    }
}
