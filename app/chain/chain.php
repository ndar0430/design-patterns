<?php

require_once 'LeftClickResponsibility.php';
require_once 'MiddleClickResponsibility.php';
require_once 'NullClickResponsibility.php';
require_once 'RightClickResponsibility.php';
require_once 'AbstractClickStatus.php';

//set objects
$middle = new MiddleClick;
$left = new LeftClick;
$right = new RightClick;
$null = new NullClick;
//set chain
$middle->succeedWith($left);
$left->succeedWith($right);
$right->succeedWith($null);
//execute chain
$middle->check(new ClickStatus);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body onmousedown="WhichButton(event)">



<script type="text/javascript">

function WhichButton(event) {
    window.location.href = "chain.php?" + event.button;
}

</script>

</body>
</html>
