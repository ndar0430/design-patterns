<?php
require_once 'AbstractClickStatus.php';

class MiddleClick extends ClickChecker
{
    public function check(ClickStatus $click)
    {
        if (isset($_GET["1"])) {
            echo "<p>Middle</p>";
        }
        $this->next($click);
    }
}
