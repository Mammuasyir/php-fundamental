<?php


function daa($dua){
    echo "Daa $dua" . PHP_EOL;
}

function baa($satu){
    echo "Baa $satu" . PHP_EOL;
}

daa("baa");

$functionYangAkanDipanggil = "baa";
$functionYangAkanDipanggil("daa");


?>