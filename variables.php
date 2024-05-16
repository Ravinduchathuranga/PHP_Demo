<?php
$globalVar = 10;

function printData()
{
    $localVar = 20;
    global $globalVar;
    echo "Global variable: $globalVar";
    echo "<br>";
    echo "Local variable: $localVar";
}
printData();    