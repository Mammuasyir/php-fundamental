<?php
//date()
//untuk menampilkan tanggal dengan format tertentu
date_default_timezone_set("Asia/jakarta") . PHP_EOL;


//untuk menampilkan waktu (hari, tanggal bulan tahun)
echo date("D, d m y") . PHP_EOL;
echo date("H:i:s") . PHP_EOL;

//detik
//detik yg sudah berlalu sejak 1 januari 1970
echo time();
	
//menghitung 1000 hari kedepan
echo date("l, d M Y", time()+60*60*24*1000) . PHP_EOL;


//strtotime
//string to time
date_default_timezone_set("Asia/jakarta") . PHP_EOL;
echo date("l", strtotime("24 aug 2002")) . PHP_EOL;
?>
