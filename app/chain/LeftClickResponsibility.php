<?php
require_once 'AbstractClickStatus.php';

class LeftClick extends ClickChecker
{
    public function check(ClickStatus $click)
    {
        if (isset($_GET["2"])) {
            echo "<p>Right</p>";
        }
        $this->next($click);
    }
}
