<?php
// Code Factorial Loop

function factorialLoop(int $values): int
{
    $total = 1;
    for ($i = 1; $i <= $values; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

function factorialRecursive(int $n): int
{
    if ($n == 1){
        return 1;
    } else{
        return $n * factorialRecursive($n - 1);
    }
};

var_dump(factorialRecursive(5));