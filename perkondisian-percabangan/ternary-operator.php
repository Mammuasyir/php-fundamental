<?php

$name = "Aziz";
$gender = "WANITA";

$sapaan = null;

if ($gender == "PRIA") {
    $sapaan = "Hi Bro $name!";
} elseif ($gender == "WANITA") {
    $sapaan = "Hi sis $name!";
} else {
    $sapaan = "Hi Waria $name";
}

echo $sapaan . PHP_EOL;

//Ternary Operator
$gender = "PRIA";
$name = "Hilmy";

$sapaan = $gender == "PRIA" ? "Hi Bro $name!" : "Hi Sis $name!";

echo $sapaan . PHP_EOL;

//2
$name = "agung";
$agama = "kristen";

$sapaan = $agama == "islam" ? "Assalamualaikum $name!" : "Selamat $name!";

echo $sapaan . PHP_EOL;

?>