<?php

function sum($first, $second) : int {
    $total = $first + $second;
    return $total;
}

$result =  sum(10,20);
echo "Totalnya adalah $result" . PHP_EOL;


function makanan($berat, $ringan) : string {
    return "ini adalah makanan $berat dan ini makanan $ringan";
}

$cetak = makanan("nasgor", "tempe");
$cetak = makanan("nasduk", "tahu");
echo $cetak . PHP_EOL ;






?>