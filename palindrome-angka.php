<?php
function palindrome_angka($bilangan){
    $palindrome = false;
    $i = 1;
    while(!$palindrome){
	if(($bilangan < 9) && ($bilangan >= 0)){
	     return $bilangan+1;
        } else {
	     if(strrev(strval($bilangan+$i)) == strval($bilangan+$i)){
		return $bilangan+$i;
		$palindrome = true;
	     } else {
		$i++;
	     }
        }
    }
}
echo palindrome_angka(8)."\n"; // 9
echo palindrome_angka(10)."\n"; // 11
echo palindrome_angka(117)."\n"; // 121
echo palindrome_angka(175)."\n"; // 181
echo palindrome_angka(1000)."\n"; // 1001
?>
