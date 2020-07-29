<?php
  function cari_mean($arr){
     return round(array_sum($arr) / count($arr));
  }
echo cari_mean([1, 2, 3, 4, 5])."\n"; // 3
echo cari_mean([3, 5, 7, 5, 3])."\n"; // 5
echo cari_mean([6, 5, 4, 7, 3])."\n"; // 5
echo cari_mean([1, 3, 3])."\n"; // 2
echo cari_mean([7, 7, 7, 7, 7])."\n"; // 7
?>
