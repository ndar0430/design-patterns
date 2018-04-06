<?php

require_once 'IModifyBehavior.php';

class ReverseBehavior implements IModifyBehavior
{

    public function apply($input)
    {
        return strrev($input);
    }
}
