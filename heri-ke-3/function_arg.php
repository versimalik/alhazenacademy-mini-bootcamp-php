<?php

$age = 30;

function sayHello($name){
    echo "Selamat datang $name" . PHP_EOL;
}


function sayGoodbye($name){
    return "Sampai ketemu lagi, $name" . PHP_EOL;
}

function add($number1, $number2){
    $result = $number1 + $number2;
    echo "$number1 + $number2 = $result" . PHP_EOL;
}

function multiply($number1, $number2){
    $result = $number1 * $number2;
    echo "$number1 x $number2 = $result" . PHP_EOL;
}

sayHello("Malik");
add(1,70);
multiply(15,20);
echo sayGoodbye("hendra");