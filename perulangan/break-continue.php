<?php

//BREAK
$anak = 1;

while (true) {
    echo "ini adalah anak ke-$anak" . PHP_EOL;
    $anak++;

    if ($anak > 5) {
        break;
    }
}

//CONTINUE
for($ganjil = 1; $ganjil <= 10; $ganjil++) {
    if($ganjil % 2 == 0) {
        continue;
    }
    echo "Angka Ganjil : $ganjil" . PHP_EOL;
}

?>