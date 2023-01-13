<?php

$values = [10, 9, 8, 7.5];
var_dump($values);

$names = array("IDN", "Boarding", "School");
var_dump($names);

//mengakses data di dalam array
echo $values[2];
echo "\n";
echo $names[1];
echo "\n";

//mengubah data di dalam array
$names[1] = "Fullday";
echo $names[1];

//menambah data di dalam array
$names[] = "Balikpapan";
var_dump($names);

//menghapus data di dalam array
unset($names[0]);
var_dump($names);

$names[0] = "Patra";
var_dump($names);

?>