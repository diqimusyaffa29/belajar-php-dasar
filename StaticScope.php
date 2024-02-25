<?php

function trafficLight(){
    $lights = ["Merah", "Kuning", "Hijau"];
    static $counter = 1;
    $r = $lights[$counter-1];
    echo $r . PHP_EOL;
    if ($counter == 3){
        $counter = 0;
    }
    $counter++;
}

trafficLight();
trafficLight();
trafficLight();
trafficLight();

//OUTPUT
/*
MERAH
KUNING
HIJAU
MERAH
*/