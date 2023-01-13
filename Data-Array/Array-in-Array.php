<?php
$sekolah = [
    "id" => "1",
    "nama" => "SMK IDN Boarding School",
    "address" => [
    "city" => "Jonggol",
    "country" => "Indonesia"
    ]
    ];

    //mencetak data di dalam array
    echo $sekolah["address"]["country"];

?>