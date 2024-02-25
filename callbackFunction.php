<?php

function sayHello(string $name, callable $filter){
    $r = call_user_func($filter, $name);
    echo "Hello $r" . PHP_EOL;
}

sayHello("Diqi","strtolower");
sayHello("Diqi", function (string $name): string {
    return strtoupper($name);
});
sayHello("Diqi", fn($name) => strtoupper($name));