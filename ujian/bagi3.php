<?php
if($nomer<16){
	
	
$ambil=mysqli_query($kon, "select tanya, urutan, jawab, ragu, j1,j2, j3, j4, j5, A, B, C, D, E, pertanyaan, listening from $nama inner join soallistening on soallistening.no_soal=$nama.tanya and soallistening.id_mapel=$nama.id_mapel where $nama.id_mapel='$idmapel' and $nama.user='$nouser' and $nama.urutan='$nomer'") or die ("Query Gagal ".mysqli_error());
$muncul=mysqli_fetch_array($ambil);
$urt=$muncul['urutan'];
$jwb=$muncul['jawab'];

$a12=$muncul['j1'];
$b12=$muncul['j2'];
$c12=$muncul['j3'];
$d12=$muncul['j4'];
$e12=$muncul['j5'];

$ragu=$muncul['ragu'];
if($ragu==1){$nilairagu="checked"; ;} else {$nilairagu="";}


$jwba=$muncul[$a12];
$jwbb=$muncul[$b12];
$jwbc=$muncul[$c12];
$jwbd=$muncul[$d12];
$jwbe=$muncul[$e12];
  


if($jwb==$a12){$nilaiA="checked"; $pilih="A" ;} else {$nilaiA="";}
if($jwb==$b12){$nilaiB="checked"; $pilih="B";} else {$nilaiB=""; }
if($jwb==$c12){$nilaiC="checked"; $pilih="C";} else {$nilaiC="";}
if($jwb==$d12){$nilaiD="checked"; $pilih="D";} else {$nilaiD=""; }
if($jwb==$e12){$nilaiE="checked"; $pilih="E";} else {$nilaiE=""; }




$soal=$muncul['pertanyaan'];

	
	
}else{


$ambil=mysqli_query($kon, "select tanya, urutan, jawab, ragu, j1,j2, j3, j4, j5, A, B, C, D, E, pertanyaan from $nama join soalinggris on soalinggris.no_soal=$nama.tanya and soalinggris.id_mapel=$nama.id_mapel where $nama.id_mapel='$idmapel' and $nama.user='$nouser' and $nama.urutan='$nomer'") or die ("Query Gagal ".mysqli_error());
$muncul=mysqli_fetch_array($ambil);
$urt=$muncul['urutan'];
$jwb=$muncul['jawab'];

$a12=$muncul['j1'];
$b12=$muncul['j2'];
$c12=$muncul['j3'];
$d12=$muncul['j4'];
$e12=$muncul['j5'];

$ragu=$muncul['ragu'];
if($ragu==1){$nilairagu="checked"; ;} else {$nilairagu="";}


$jwba=$muncul[$a12];
$jwbb=$muncul[$b12];
$jwbc=$muncul[$c12];
$jwbd=$muncul[$d12];
$jwbe=$muncul[$e12];
  


if($jwb==$a12){$nilaiA="checked"; $pilih="A" ;} else {$nilaiA="";}
if($jwb==$b12){$nilaiB="checked"; $pilih="B";} else {$nilaiB=""; }
if($jwb==$c12){$nilaiC="checked"; $pilih="C";} else {$nilaiC="";}
if($jwb==$d12){$nilaiD="checked"; $pilih="D";} else {$nilaiD=""; }
if($jwb==$e12){$nilaiE="checked"; $pilih="E";} else {$nilaiE=""; }



$soal=$muncul['pertanyaan'];

}


?>