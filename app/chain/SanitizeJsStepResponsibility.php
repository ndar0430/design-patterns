<?php
require_once 'AbstractSanitize.php';

class SanitizeJsStepResponsibility extends SanitizeChecker
{ 
    public function check(SanitizeCode $sanitize)
    {
        $contains = "<script>";
        if (($_POST['userInput']) == $contains) {
            echo "<p>Sanitized JavaScript</p>";
        }

        $this->next($sanitize);
    }
}
