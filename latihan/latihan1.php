<?php

$name = "Sapta";
$age = 17;
$class = 11 ;
$goldar = null;
$hobby = "tidur";
$cita2 = "punya warung bakso";
$Menyukai_wanita = "suka";
$wife = null;
$penghasilan = null;

echo<<<biodata
Nama : $name
Umur : $age
Kelas : $class
Golongan Darah : $goldar
Hobi : $hobby
Cita-cita : $cita2
biodata;
echo "\n";
echo "\n";

echo "Menyukai wanita? : ";
var_dump(isset($Menyukai_wanita));

echo "Menikah? : ";
var_dump(isset($wife));

echo "Belum Penghasilan : ";
var_dump(is_null($penghasilan));



?>