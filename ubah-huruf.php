<?php
  function ubah_huruf($str){
      $map = str_split("abcdefghijklmnopqrstuvwxyz");
      $teks = str_split(strtolower($str));
      $hasil = [];
      for($i = 0;$i<count($teks);$i++){
	 $huruf = array_push($hasil,$map[array_search($teks[$i],$map)+1]);
      }
      return join("",$hasil);
  }
echo ubah_huruf('wow')."\n"; // xpx
echo ubah_huruf('developer')."\n"; // efwfmpqfs
echo ubah_huruf('laravel')."\n"; // mbsbwfm
echo ubah_huruf('keren')."\n"; // lfsfo
echo ubah_huruf('semangat')."\n"; // tfnbohbu
?>
