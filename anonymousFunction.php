<?php
$sayHello = function (string $name){
    echo "Hello $name". PHP_EOL;
};

$sayHello("Diqi");

// Anonymous Function sebagai argument

function sayGoodBye(string $name, $filter){
    $r = $filter($name);
    echo "Good Bye $r" . PHP_EOL;
};

$filterFunction = function(string $name): string{return strtolower($name);};

sayGoodBye("Diqi", function(string $name){ return strtoupper($name);});
sayGoodBye("Diqi", $filterFunction);


// cara mengakses variable dari luar closure/anonymous function

$depan = "Muhammad";
$belakang = "Musyaffa'";
$depan = "Ini sudah berubah";

$sayHalo = function () use ($depan, $belakang){
    echo "Halo $depan $belakang" . PHP_EOL;
};

$sayHalo();