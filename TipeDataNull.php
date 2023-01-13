<?php
$name = "Rakha";
$name = "Raji";

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//Mengecek apakah data null atau tidak
echo "Is name null? : ";
var_dump(is_null($name));

//unset untuk menghapus data
$makanan = "Nasi Goreng";
unset($makanan);

$makanan = "salome";

echo $makanan;

//isset untuk mengecek apakah data ada atau tidak
echo "Is makanan ada? : ";
var_dump(isset($makanan));


?>