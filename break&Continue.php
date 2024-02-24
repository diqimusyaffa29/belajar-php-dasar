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
function oddNumber ($number) {
    $counter = 1;
    for($counter; $counter <= $number; $counter++){
        if($counter % 2 == 0) {
            continue; //jika kondisi terpenuhi, maka akan langsung masuk ke dalam post statement
        }
        echo "Angka yang habis di bagi 2 : $counter". PHP_EOL; //akan skipp angka yang habis di bagi 2
    }
}
$number = 50;
oddNumber($number);

