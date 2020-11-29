<?php
if($nomer<16){
	
	
$ambil=mysqli_query($kon, "select A, B, C, D, E,no_soal, pertanyaan, listening from soallistening where id_mapel='$idmapel' and no_soal='$nomer'") or die ("Query Gagal ".mysqli_error());
$muncul=mysqli_fetch_array($ambil);
$urt=$muncul['no_soal'];






$jwba=$muncul['A'];
$jwbb=$muncul['B'];
$jwbc=$muncul['C'];
$jwbd=$muncul['D'];
$jwbe=$muncul['E'];
  


$soal=$muncul['pertanyaan'];

	
	
}else{


$ambil=mysqli_query($kon, "select A, B, C, D, E,no_soal, pertanyaan from soalinggris where id_mapel='$idmapel' and no_soal='$nomer'") or die ("Query Gagal ".mysqli_error());
$muncul=mysqli_fetch_array($ambil);
$urt=$muncul['no_soal'];






$jwba=$muncul['A'];
$jwbb=$muncul['B'];
$jwbc=$muncul['C'];
$jwbd=$muncul['D'];
$jwbe=$muncul['E'];
  


$soal=$muncul['pertanyaan'];
}


?>