<?php


$ambil=mysqli_query($kon, "select  A, B, C, D, E, pertanyaan,no_soal from soal  where id_mapel='$idmapel' and no_soal='$nomer'") or die (mysqli_error($kon));
$muncul=mysqli_fetch_array($ambil);
$urt=$muncul['no_soal'];

$jwba=$muncul['A'];
$jwbb=$muncul['B'];
$jwbc=$muncul['C'];
$jwbd=$muncul['D'];
$jwbe=$muncul['E'];

$soal=$muncul['pertanyaan'];
?>