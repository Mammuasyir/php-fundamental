<?php

//nilainya sama, walaupun tipe data berbeda tetap true
var_dump("10" == 10);
//nilainya sama, tapi tipe datanya berbeda maka dia false
var_dump( "10" === 10);

//kebalikan dari "==" yakni tidak sama dari nilai aja 
var_dump("9" != 9);
//kebalikan dari "===" yakni tidak sama persis dari nilai dan tipe data
var_dump("9" !== 9);

//lebih besar dan lebuh kecil dari
var_dump(10 < 9);

var_dump(9 >= 9);

?>