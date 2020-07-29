<?php
  function skor_terbesar($arr){
     $hasil = [];
     $kelas = ["kelas" => [], "nama" => [], "nilai" => []];
     for($i=0;$i<count($arr);$i++){
	if(!in_array($arr[$i]["kelas"],$kelas["kelas"])){
	    array_push($kelas["kelas"],$arr[$i]["kelas"]);
	    array_push($kelas["nama"],[]);
	    array_push($kelas["nilai"],[]);
	    if(true) {
	      array_push($kelas["nama"][array_search($arr[$i]["kelas"],$kelas["kelas"])],$arr[$i]["nama"]);
	      array_push($kelas["nilai"][array_search($arr[$i]["kelas"],$kelas["kelas"])],$arr[$i]["nilai"]);
	    }
        }
	if(!in_array($arr[$i]["nama"],$kelas["nama"][array_search($arr[$i]["kelas"],$kelas["kelas"])])){
	    array_push($kelas["nama"][array_search($arr[$i]["kelas"],$kelas["kelas"])],$arr[$i]["nama"]);
            array_push($kelas["nilai"][array_search($arr[$i]["kelas"],$kelas["kelas"])],$arr[$i]["nilai"]);
        }
     }
     for($i=0;$i<count($kelas["kelas"]);$i++){
	$skorterbesar = ["nama" => "", "kelas" => "", "nilai" => 0];
	$skortertinggi = max($kelas["nilai"][array_search($kelas["kelas"][$i],$kelas["kelas"])]);
        $skorterbesar["nama"] = $kelas["nama"][array_search($kelas["kelas"][$i],$kelas["kelas"])][array_search($skortertinggi,$kelas["nilai"][array_search($kelas["kelas"][$i],$kelas["kelas"])])];
        $skorterbesar["kelas"] = $kelas["kelas"][$i];
	$skorterbesar["nilai"] = $skortertinggi;
	array_push($hasil, $skorterbesar);
     }
     return $hasil;
  }
// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>
