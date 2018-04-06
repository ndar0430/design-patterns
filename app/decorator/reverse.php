<?php

require_once 'ReverseBehavior.php';
require_once 'LoggingModifyBehaviorDecorater.php';
require_once 'TimeBehaviorDecorator.php';
require_once 'ExceptionHandlingBehaviorDecorator.php';
require_once 'NullBehaviorDecorator.php';
require_once 'InterceptionBehaviorDecorator.php';
require_once 'ThreadingBehaviorDecorator.php';

if (isset($_REQUEST['submit'])) {
    $reverseBehavior = new ReverseBehavior;
    $logging = new LoggingModifyBehaviorDecorater($reverseBehavior);
    $calculateExecutionTime = new TimeBehaviorDecorator($reverseBehavior);
    $exception = new ExceptionHandlingBehaviorDecorator($reverseBehavior);
    $rejectExecution = new NullBehaviorDecorator($logging, $reverseBehavior);
    $interception = new InterceptionBehaviorDecorator($logging);
    $worker = new ThreadingBehaviorDecorator($reverse);

}

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
    <form action="" method="get">
    User input
    <input type="text" name="input" id="input">
    <button type="sub qmit" name="submit">Submit</button>
    </form>

    <?php
if (isset($_REQUEST['submit'])) {

    echo "Threading:" . $worker->start($_REQUEST['input']);

    echo "<br>" . $exception->exception($_REQUEST['input']);

    echo "Reverse: " . $reverseBehavior->apply($_REQUEST['input']) . "<br>";

    //  echo "Reject Execution:" . $rejectExecution->rejectExecution($logging) . "<br>" ;
    echo "Logging: " . $logging->apply($_REQUEST['input']) . "<br>";

    echo "Execution Time: " . $calculateExecutionTime->calculateExecutionTime($_REQUEST['input']) . "<br>";

    echo "Interception: " . $interception->intercept($_REQUEST['input']) . "<br>";

}
?>
</body>
</html>
