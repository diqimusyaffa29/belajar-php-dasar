<?php

$first = [
    "first_name" => "Eko",
];

$last = [
    "last_name" => "Kocak",
];


$full = $first + $last;
var_dump($full);


$a = [
    "first_name" => "Eko",
    "last_name" => "Kocak",
];

$b = [
    "last_name" => "Kocak",
    "first_name" => "Eko",
];


var_dump($a == $b);
var_dump($a === $b); //false karena urutan nya berbeda
