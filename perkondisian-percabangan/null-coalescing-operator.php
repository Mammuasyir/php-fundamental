<?php 

//tanpa null coalescing operator
$kelas = ["younes"];

if (isset($kelas[0])) {
    $cetak = $kelas[0];
} else {
    $cetak = "Kelas kosong";
}

echo $cetak . PHP_EOL;

//null coalescing operator
$toilet = [
    "PRIA" => "affan",
    "WANITA" => null,
];

$pengguna = $toilet["WANITA"] ?? "KOSONG";

echo $pengguna;
?>