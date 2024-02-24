<?php

$names = ["Muhammad","Shiddiqi", "Musyaffa'"];

//foreach ($names as $r){
//    echo $r . PHP_EOL;
//}

// Foreach dengan menggunakan associative array
$names2 = [
    "firstName" => "Muhammad",
    "middleName" => "Shiddiqi",
    "lastName" => "Musyaffa'"
];

foreach ($names2 as $q => $value){
    echo $value. PHP_EOL;
}
