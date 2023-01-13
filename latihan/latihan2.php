<?php

$rpl = ["Arsyad", "Farrel", "Raji", "Younes"];

//hapus nama arsyad dari rpl
unset($rpl[0]);
var_dump($rpl);

//tambah nama joko ke rpl
$rpl[0] = "Joko";
var_dump($rpl);

$macan = [
    "kaki" => 4,
    "kulit" => "belang",
    "makanan" => "daging",
    "kelamin" => "jantan",
    "taring" => 2
];

//ganti makanan macan dari daging menjadi sayuran
$macan["makanan"] = "sayuran";

//menambahkan data baru ke dalam array
$macan["warna"] = "hitam";
var_dump($macan);

$angkringan = [
    "makanan_pokok" => "nasi",
    "minuman" => "es teh",
    "lauk_pauk" => [
    "murah" => "telor",
    "standar" => "ayam",
    "mahal" => "ikan",
    ],
    "cemilan" => "kentang"
    ];

    //ganti lauk pauk mahal dari ikan menjadi daging
    $angkringan["lauk_pauk"]["mahal"] = "daging";
    
    //tambahkan lauk pauk mewah seafood dan rokok sampoerna
    $angkringan["lauk_pauk"]["mewah"] = "seafood";
    $angkringan["rokok"] = "sampoerna";
    var_dump($angkringan);

    


?>