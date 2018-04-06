<?php

class SanitizeCode
{
    public $html;
    public $js;
    public $sql;
}

abstract class SanitizeChecker
{

    protected $successor;

    abstract public function check(SanitizeCode $sanitizeCode);

    public function succeedWith(SanitizeChecker $successor)
    {
        $this->successor = $successor;
    }
    public function next(SanitizeCode $sanitize)
    {
        if ($this->successor) {
            $this->successor->check($sanitize);
        }
    }
}
