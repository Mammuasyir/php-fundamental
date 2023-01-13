<?php

// Khusus union/+ Array pertama lebih mendominasi array setelahnya jika index array setelahnya sudah ada di array pertama.
$manusia1 = [
    "first_name" => "Raji",
    "last_name" => "Idham"
];

$manusia2 = [
    "first_name" => "Younes",
    "last_name" => "Al-Manaf"
];

$gabung = $manusia1 + $manusia2;
var_dump($gabung);

?>
