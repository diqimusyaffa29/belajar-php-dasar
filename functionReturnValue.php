<?php

function sum (int $a, int $b){
    return $a + $b . PHP_EOL;
}

$r = sum(10,10);
echo $r ;

//Return Type Declarations

function sum2(int $a, int $b): int{
    return $a * $b . PHP_EOL;
}

echo sum2(2,5);