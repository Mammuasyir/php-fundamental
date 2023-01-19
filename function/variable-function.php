<?php

//Apa kegunaan dari variable function sendiri? Kita bisa bikin sebuah argument di sebuah function
// yang argument itu adalah nama function yang lain. 

function satu() {
    echo "aku adalah satu" . PHP_EOL;
}

function dua($variabel) {
    echo "aku adalah dua $variabel";
}

//cara normal
satu();

//variable-function
$functionPanggilan = "dua";
$functionPanggilan("satu"); 

?>