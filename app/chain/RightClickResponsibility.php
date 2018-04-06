<?php
require_once 'AbstractClickStatus.php';

class RightClick extends ClickChecker
{
    public function check(ClickStatus $click)
    {
        if (isset($_GET["0"])) {
            echo "<p>Left</p>";
        } 
        $this->next($click);
    }
}
