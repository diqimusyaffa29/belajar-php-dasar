<?php

$data = [1,2,3,4,5,6,7,8,9,10];

$arrayMap = array_map(fn($data) => $data * 2, $data);
var_dump($arrayMap);

rsort($data);
var_dump($data);