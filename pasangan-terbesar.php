<?php
  function pasangan_terbesar($bilangan){
     $singlebilangan = str_split(strval($bilangan));
     $listbilangan = [];
     for($i = 0;$i<=(count($singlebilangan)*2);$i++){
	$pasanganbilangan = $singlebilangan[0].$singlebilangan[1];
	array_push($listbilangan,intval($pasanganbilangan));
        array_shift($singlebilangan);
     }
     return max($listbilangan);
  }
echo pasangan_terbesar(641573)."\n"; // 73
echo pasangan_terbesar(12783456)."\n"; // 83
echo pasangan_terbesar(910233)."\n"; // 91
echo pasangan_terbesar(71856421)."\n"; // 85
echo pasangan_terbesar(79918293)."\n"; // 99
?>
