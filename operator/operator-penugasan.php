<?php

$total = 0;

$fruit = 5000;
$chicken = 10000;
$promo = 5000;
$anak = 2;

//jumlah belanja
$total += $fruit;
$total += $chicken;

//dikurangin promo
$total -= $promo;

//dibagi 2 anak
$total /= $anak;

var_dump($total);


?>