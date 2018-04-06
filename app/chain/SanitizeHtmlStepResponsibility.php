<?php
require_once 'AbstractSanitize.php';

class SanitizeHtmlStepResponsibility extends SanitizeChecker
{ 
    public function check(SanitizeCode $sanitize)
    {
        if (isset($_POST['userInput']) && !strip_tags($_POST['userInput'])) {
            echo "<p>Sanitized Html</p>";
        }
        $this->next($sanitize);
    }
}
