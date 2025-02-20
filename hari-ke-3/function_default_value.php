<?php

function welcome($name=""){
    if($name==""){
        return "Selamat Datang" . PHP_EOL;
    } else{
        return "Selamat Datang, $name" . PHP_EOL;
    }
}

function checkout($price, $qty=1){
    $total = $price * $qty;
    return $total;
}

var_dump(checkout(50000, 4));

echo welcome("wahyu");
echo welcome();