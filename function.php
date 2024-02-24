<?php

function sayHello(){
    echo "Hello Function". PHP_EOL;
}

//sayHello();

$buat = false;

if ($buat){
    function hi()
    {
        echo "hi" .PHP_EOL;
    }
}
//hi();



function sayName($name, $lastname){
    echo "Hellooo $name $lastname" .PHP_EOL;
}

//sayName("Diqi", "Musyaffa");


function sayName2($name = "Siapa nichhh"){
    echo "Hello $name". PHP_EOL;
}

//sayName2(); //jika di dalam parameter tidak diisi maka akan diisi oleh default value
//sayName2("Diqi");



function sayHello2($firstName, $lastName = ""){
    echo "Hello $firstName $lastName".PHP_EOL;
}

//sayHello2("Diqi");
//sayHello2("Diqi", "Musyaffa");


//Argument Types
function sum (int $a, int $b){
    $r = $a + $b;
    echo "Penjumlahand dari $a + $b adalah $r". PHP_EOL;
}

sum(5,3);


//Variabel Length argument list

function sumAll(...$values){
    $total = 0;
    foreach ($values as $a){
        $total += $a;
    }
    echo "Total ". implode(",",$values) . " = $total ". PHP_EOL;
}

$values = [1,2,3,4,5];
sumAll(10,20,30,40,50);
sumAll(...$values); //... diawal akan membuat array yang sudah lebih dulu dibuat bisa menjadi parameter function yang menggunakan variable length argument list