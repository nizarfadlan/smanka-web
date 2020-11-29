<?php

if($nomer>$bataspil){
	$ambil=mysqli_query($kon, "select  pertanyaan,no_soal from soalmtkessay  where id_mapel='$idmapel' and no_soal='$nomer'") or die (mysqli_error($kon));
$muncul=mysqli_fetch_array($ambil);
$urt=$muncul['no_soal'];
}else{
$ambil=mysqli_query($kon, "select  A, B, C, D, E, pertanyaan,no_soal from soalmtk  where id_mapel='$idmapel' and no_soal='$nomer'") or die (mysqli_error($kon));
$muncul=mysqli_fetch_array($ambil);
$urt=$muncul['no_soal'];

$jwba=$muncul['A'];
$jwbb=$muncul['B'];
$jwbc=$muncul['C'];
$jwbd=$muncul['D'];
$jwbe=$muncul['E'];
  }
$soal=$muncul['pertanyaan'];
?>