<?php

//global scope
global $name ;
$name = "Younes";

function sapaan(){
    global $name;
    echo "Hello $name" . PHP_EOL;
}

sapaan();

function makanan(){
    global $name;
    return "Makanan favorit $name adalah martabak" . PHP_EOL;
}

$cetak = makanan();
echo $cetak;

?>