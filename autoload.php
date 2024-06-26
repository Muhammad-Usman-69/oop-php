<?php

//this can be used to auto load classes from file instead of requiring them again an again
function autoload($class)
{
    require (__DIR__ . "/" . $class . ".php");
}

spl_autoload_register("autoload");

$class1 = new AutoFirst();
echo "<br>";
$class1 = new AutoSecond();