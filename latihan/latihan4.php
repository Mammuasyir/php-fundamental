<?php
function hitung_luas_segitiga($alas, $tinggi) {
 $luas_segitiga = ($alas * $tinggi)/2;
return $luas_segitiga;
}

function hitung_luas_persegi($panjang, $lebar){
 $luas_persegi = $panjang * $lebar;
return $luas_persegi;
}

$segitiga = hitung_luas_segitiga(4,3);
$persegi  = hitung_luas_persegi (5,3);

echo "Luas Segitiga : $segitiga" . PHP_EOL;
echo "Luas Persegi Panjang : $persegi";

?>