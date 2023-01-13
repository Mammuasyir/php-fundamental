<?php

//Expression adalah sesuatu yang menghasilkan nilai
$manusia = "younes";
$orang = $manusia;

//Statement adalah sebuah eksekusi yang dapat dijalankan
$makanan = "nasi goreng";
echo $makanan;

echo "\n";
$date = new DateTime();
echo $date->format('Y-m-d');

//Block adalah sebuah statement yang berada di dalam kurung kurawal
function Biodata() {
    echo "Nama : Younes";
    echo "Umur : 20";
    echo "Alamat : Jl. Kebon Jeruk";
}



?>