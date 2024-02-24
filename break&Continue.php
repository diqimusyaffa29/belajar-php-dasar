<?php

// Implementation of Break 

$counter = 1;

// while (true) {
//     echo "Hello Break pada angka ke : $counter" . PHP_EOL;
//     $counter++;

//     if($counter >10) {
//         break;
//     }
// }


// Implementation of Continue
for($counter; $counter <= 100; $counter++){
    if($counter % 2 == 0) {
        continue;
    }
    echo "Angka yang tidak habis di bagi 2 : $counter". PHP_EOL;
}