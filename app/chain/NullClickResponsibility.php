<?php
require_once 'AbstractClickStatus.php';

class NullClick extends ClickChecker
{
    public function check(ClickStatus $click)
    {
        if (empty($_GET)) {
            echo "<p>Null</p>";
        } 
        $this->next($click);
    }
}
