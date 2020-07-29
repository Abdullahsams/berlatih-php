<?php
  function tentukan_deret_geometri($arr){
      $hasil = [];
      $listbilangan = $arr;
      $temp = $listbilangan[1] / $listbilangan[0];
      for($i=0;$i<count($listbilangan);$i++){
	   if($listbilangan[$i+1] / $listbilangan[$i] == $temp){
	      array_push($hasil,1);
	   } else {
	      array_push($hasil,0);
	   }
      }
      array_pop($hasil);
      if(in_array(0,$hasil)){
	  return "false";
      } else {
	  return "true";
      }
  }
echo tentukan_deret_geometri([1, 3, 9, 27, 81])."\n"; // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32])."\n"; // true
echo tentukan_deret_geometri([2, 4, 6, 8])."\n"; // false
echo tentukan_deret_geometri([2, 6, 18, 54])."\n"; // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9])."\n"; //false
?>
