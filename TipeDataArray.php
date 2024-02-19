<?php

$values = array(1,2,3,4,5,6,7,8,9,10,11);
// var_dump($values);

$names = ["Diqi", "Farah", "Farah Lagi"];
// var_dump($names);

// echo $names[0]; //Melihat per index
$names[0] = "Diqi Ganteng"; //Mengubah data index
$names[] = "Mamah"; //Menambahkan data ke dalam array 
// echo unset($names[0]); //Menghapus nilai dari index secara otomatis dari array
// echo count($names);

$diqi = [
    "id"=> 1,
    "name"=> "Muhammad Shiddiqi Musyaffa'",
    "age"=> 23,
    "address"=> [
        "city"=> "Banjarmasin",
        "country"=> "Indonesia",
    ],
];

var_dump($diqi);

var_dump($diqi["address"]["city"]);