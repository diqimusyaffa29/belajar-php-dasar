<?php

// $data  = [
//     "action"=> "Create",
//     "kocak"=> "Kocak",
// ];

// if(isset($data['action'])){
//     $action = $data['action'];
// } else{
//     $action = 'nothing';
// }

// echo $action . PHP_EOL;


// Null Coalescing 
$data = [
    "action"=> "mantap",
];

$action = $data['action'] ?? 'nothing';

echo $action;