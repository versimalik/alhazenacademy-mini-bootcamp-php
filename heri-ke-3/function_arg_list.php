<?php

function add(int $n1, int $n2):int{
    $result = $n1+$n2;
    return $result;
}

echo add(10,14) . PHP_EOL;
var_dump(add(10,14));

function add_list(...$numbers):string{
    return implode(" + ", $numbers) . " = " . array_sum($numbers);
}

echo add_list(1,2,3) . PHP_EOL;
echo add_list(10,14,16,78) . PHP_EOL;