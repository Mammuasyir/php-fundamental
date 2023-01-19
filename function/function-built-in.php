<?php

date_default_timezone_set("Asia/Jakarta") . PHP_EOL;

echo date("D, d M Y") . PHP_EOL;

echo time() . PHP_EOL;

echo date("l, d M Y", time()+60*60*24*20);

?>