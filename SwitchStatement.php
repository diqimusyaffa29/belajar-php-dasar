<?php

$nilai = "D";

switch ($nilai) {
    case "A":
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "BODOH" . PHP_EOL;
        break;
}

switch ($nilai):
    case "A":
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "BODOH" . PHP_EOL;
        break;
endswitch;
