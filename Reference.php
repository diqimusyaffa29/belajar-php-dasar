<?php
//Assign by Reference

$name = "Diqi";
$otherName = &$name;
$otherName = "Budi"; //akan mengubah value dari sebuah variabel yang bernama $name
echo $name . PHP_EOL;

function increment (int &$n){
    $n++;
};

$counter = 1;
increment($counter);

echo $counter. PHP_EOL;


function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;