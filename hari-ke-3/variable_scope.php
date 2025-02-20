<?php

$name = "Jaka";

function sayHello():string{
    
    return "Selamat datang $GLOBALS[name]";
}
echo sayHello();

// function sayHello(string $name):string{
//     return "Selamat datang $name";
// }

// echo $name;