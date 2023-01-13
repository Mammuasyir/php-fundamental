<?php

$manusia = [
    "tangan" => 2,
    "rambut" => "merah",
];

//mengambil data di dalam array
var_dump($manusia);

//menampilkan data di dalam array sesuai index
echo $manusia["rambut"];

//mengganti data di dalam array
$manusia["rambut"] = "hitam";


?>