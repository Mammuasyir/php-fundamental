<?php

//Expression
$manusia = "younes";
$orang = $manusia;

function getNilai(){
    return 100;
}
$value = getNilai();

//Statement
$manusia = "younes";
echo $manusia;

$date = new DateTime();
echo "\n";
echo $date->format('Y-m-d');

//Block
$manusia = "younes";

if($manusia == "younes"){
    echo true;
}else{
    echo false;
}


?>