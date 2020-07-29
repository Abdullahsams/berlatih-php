<?php
  function papan_catur($bilangan){
     $papancatur = [];
     $i = 1;
     while($i <= $bilangan){
	$papan = $i % 2 !== 0 ? str_repeat("# ",$bilangan) : str_repeat(" #",$bilangan-1);
	array_push($papancatur, $papan);
	$i++;
     }
     return join("\n",$papancatur);
  }
echo papan_catur(4)."\n";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)."\n";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5)."\n";
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>
