<?php

// function sayHello($name)
// {
//     echo "Hello $name";
// }

// sayHello("John");

//  The above code will output: 
//  Hello John 
//  In the above example, the  sayHello()  function takes a parameter  $name  and prints the message  Hello $name . 
//  PHP Function Arguments 
//  A function can take multiple arguments separated by commas. 
//  The following example demonstrates how to define a function with multiple arguments:

function sum($num1,$num2){
    $total = $num1 + $num2;
    echo "The sum of $num1 and $num2 is $total";
}
sum(10,20);
?>