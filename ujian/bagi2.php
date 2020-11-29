<?php
if($alamat=='soalmtkessay' or $alamat=='soalpgessay'){
	$ambil=mysqli_query($kon, "select * from $alamat where id_mapel='$idmapel' and no_soal='$nomer'") or die ("Query Gagal ".mysql_error());
$muncul=mysqli_fetch_array($ambil);
	$kuncinya;
	
}else {

$ambil=mysqli_query($kon, "select * from $alamat where id_mapel='$idmapel' and no_soal='$nomer'") or die ("Query Gagal ".mysql_error());
$muncul=mysqli_fetch_array($ambil);



$jwba=$muncul['A'];
$jwbb=$muncul['B'];
$jwbc=$muncul['C'];
$jwbd=$muncul['D'];
$jwbe=$muncul['E'];

}

$soal=$muncul['pertanyaan'];
?>