<?php
include "system/koneksi.php";
$jam=date("H:i:s");

if(isset($_SESSION['user'])){
	$telah_berlalu = time() - $_SESSION['user'];
	}
else {
	$_SESSION['user'] = time();
	$telah_berlalu = 0;
	}





$user=$_GET['user'];
$mapel=$_GET['mapel'];
$urutan=$_GET['no'];

$nama=$mapel.'jawaban';

if(isset($_GET['pil'])){
	$jawaban = $_GET['pil'] ;
}else{
	$jawaban ='';
}
if(isset($_GET['ragu'])){
	$ragu=$_GET['ragu'];
}else{
	$ragu ='';
}
$jumlah=$_GET['jml'];

$lari=$_GET['nomer'];
$nilai=mysqli_query($kon, "select kunci, total_waktu, tambahan from $nama where user='$user' and id_mapel='$mapel' and urutan='$urutan'");
$a=mysqli_fetch_array($nilai);
$kunci=$a['kunci'];
if($kunci==$jawaban){
	$hitung=1;}
else{$hitung=0;};
$total=$a['total_waktu'];

if(empty($a['tambahan'])){
	$detiknya=$total;
	$sisawaktu=$total - $telah_berlalu;
	
}else{
	$detiknya=$a['tambahan'];
	$sisawaktu=$a['tambahan'] - $telah_berlalu;
}



mysqli_query($kon, "update $nama set jawab='$jawaban', nilai='$hitung', waktu_update='$jam', sisa_waktu='$sisawaktu', ragu='$ragu' where user='$user' and id_mapel='$mapel' and urutan='$urutan'")
or die ("SQL Error: ".mysqli_error());




echo "<script>;window.location='home.php?id=$mapel&no=$lari&user=$user&jml=$jumlah&dtk=$detiknya'</script>";





?>