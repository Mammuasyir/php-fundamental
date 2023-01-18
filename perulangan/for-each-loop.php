<?php


$kelas = ["Raji", "Younes", "Rizal", "Rizki", "Farrel"];

//menggunakan for loop
for($i = 0; $i < count($kelas); $i++) {
    echo "Nama SIswa : $kelas[$i]" . PHP_EOL;
}

//menggunakan foreach
foreach($kelas as $class) {
    echo "Nama Siswa : $kelas" . PHP_EOL;
}

//menggunakan foreach loop dengan memanggil index dan valuenya
foreach($kelas as $absen => $siswa) {
    echo " absensi ke-$absen dengan nama $siswa" . PHP_EOL;
}

//menggunakan foreach dengan index string/array asosiatif
$manusia = [
    "first_name" => "Affan",
    "middle_name" => "Bakhtiyar",
    "last_name" => "Putra"
];

foreach($manusia as $info => $name) {
    echo "$info : $name" . PHP_EOL;
}


?>