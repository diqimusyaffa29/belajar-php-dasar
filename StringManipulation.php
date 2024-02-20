<?php

// Dot Operator
$name = "Muhammad Shiddiqi Musyaffa'";

echo "Name : ". $name . PHP_EOL;
echo "Nilai : ". 100 . PHP_EOL;

// conversion String
$valueString = (string) 100; //conversion from number to string
var_dump($valueString);

$valueInt = (int) "100"; //conversion from String to number
var_dump($valueInt); 

$valueFloat = (float) "100.11"; //conversion from string to float type number
var_dump($valueFloat);

// Accessing Characters
echo $name[0] . PHP_EOL;
echo $name[8] . PHP_EOL;
echo $name[9] . PHP_EOL;


// Variable Parsing
$name = "Diqi";

echo "Hello $name, Selamat belajar PHP" . PHP_EOL; //ini adalah variabel parsing (hanya berlaku pada heredoc string / string dengan menggunakan tanda kutip 2)


// Curly Brace
echo "Hello {$name}s, Selamat belajar PHP" . PHP_EOL; 
