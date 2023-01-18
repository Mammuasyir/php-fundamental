<?php

function sum($first, $second) : int {
    $total = $first + $second;
    return $total . PHP_EOL;
}

$hasil = sum(12,20);
echo "Totalnya adalah $hasil";

?>