<?php

//1
$data = null;

switch ($data) {
    case "MAMPU";
    echo "Keluarga Kaya";
    break;
    case "CUKUP";
    echo "Keluarga Standar";
    break;
    case "KURANG";
    echo "Keluarga Kurang Mampu";
    break;
    default :
    echo "Belum terdata";
}

echo PHP_EOL;


//2
$umur = 20;
$name = "Hasun";
$sapaan = null;

if ($umur <= 20) {
    $sapaan = "Hi Adek $name!";
} else{
    $sapaan = "Hi Bapak $name!";
}

echo $sapaan . PHP_EOL;

// Ternary Operator
$umur = 23;
$sapaan = $umur <= 20 ? "Hi Adek $name!" : "Hi Bapak $name!";

echo $sapaan . PHP_EOL;

?>