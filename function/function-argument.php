<?php

function tangan($makan, $minum) {
    echo "tangan untuk makan $makan dan untuk minum $minum" . PHP_EOL;
}

tangan("buah", "air");
tangan("ayam", "es cekek");

//pendeklarasian
function sum(int $first, int $second) {
    $total = $first + $second;
    echo "Total hasil pemjumlahannya adalah $total" . PHP_EOL;
}

sum(12,20);
sum("10", "13");
sum(true, false);

?>