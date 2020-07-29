<?php
function tukar_besar_kecil($str){
   return strtolower($str) ^ strtoupper($str) ^ $str;
}
echo tukar_besar_kecil('Hello World')."\n"; // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY')."\n"; // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!')."\n"; // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me')."\n"; // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW')."\n"; // "001-a-3-5tRDyw"
?>
