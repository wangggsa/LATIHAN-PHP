<?php

$wallet = 50000;
$harga = 20000;
$sisa = $wallet - $harga;

if ($wallet >= 20000) {
    echo "Saya beli 1";
} else if ($wallet < 20000) {
    echo "mahal bgt, situ jualan atau malak?";
} else {
    echo "gajadi beli, ga mood";
}

 function kesimpulan(){
    echo "wleo";
 }

 kesimpulan();

?>