<?php

//static scope

function cetakAngka(){
static $number = 1;

echo "Angka $number" . PHP_EOL;

$number++;
}

cetakAngka();
cetakAngka();
cetakAngka();
cetakAngka();

?>