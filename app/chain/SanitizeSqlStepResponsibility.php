<?php
require_once 'AbstractSanitize.php';

class SanitizeSqlStepResponsibility extends SanitizeChecker
{ 
    public function check(SanitizeCode $sanitize)
    {
        $contains = "SELECT";
        if (($_POST['userInput']) == $contains) {
            echo "<p>Sanitized SQL</p>";
        }

        $this->next($sanitize);
    }
}
