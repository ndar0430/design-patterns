<?php

require_once 'SanitizeHtmlStepResponsibility.php';
require_once 'SanitizeJsStepResponsibility.php';
require_once 'SanitizeSqlStepResponsibility.php';
require_once 'AbstractSanitize.php';

//set objects
$sanitizeHtml = new SanitizeHtmlStepResponsibility;
$SanitizeJs = new SanitizeJsStepResponsibility;
$SanitizeSql = new SanitizeSqlStepResponsibility;

//set chain
$sanitizeHtml->succeedWith($SanitizeJs);
$SanitizeJs->succeedWith($SanitizeSql);
//execute chain
$sanitizeHtml->check(new SanitizeCode);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
User input:
<input type="text" name="userInput" id="userInput">
<button type="submit">Submit</button>
</form>
</body>
</html>
