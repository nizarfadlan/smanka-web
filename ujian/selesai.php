<?php
include "system/koneksi.php";


if(isset($_GET['jwbisian'])){
	$jawaban = $_GET['jwbisian'] ;
}else if(isset($_GET['pil'])){
	$jawaban = $_GET['pil'] ;
}else{
	$jawaban ='';
}
if(isset($_GET['ragu'])){
	$ragu=$_GET['ragu'];
}else{
	$ragu ='';
}
$user=$_GET['user'];
$mapel=$_GET['mapel'];
$urutan=$_GET['no'];
$jumlah=$_GET['jml'];
$nama=$mapel.'jawaban';

$nilai=mysqli_query($kon, "select * from $nama where user='$user' and id_mapel='$mapel' and urutan='$urutan'");
$a=mysqli_fetch_array($nilai);


$kunci1=$a['kunci'];
	
if($kunci1==$jawaban ){
	$hitung=1;}
else{$hitung=0;};





mysqli_query($kon, "update $nama set jawab='$jawaban', nilai='$hitung' where user='$user' and id_mapel='$mapel' and urutan='$urutan'")
or die ("SQL Error: ".mysqli_error());
mysqli_query($kon, "update status set status='0' where user='$user' and id_mapel='$mapel'")
or die ("SQL Error: ".mysqli_error());
$cekselesai=mysqli_query($kon, "select * from selesai where no_ujian='$user' and id_mapel='$mapel' ");
$ketemuselesai=mysqli_num_rows($cekselesai);
if($ketemuselesai>0){
}else{

$sql5 = mysqli_query($kon, "insert into selesai (no_ujian, id_mapel, status) values ('$user', '$mapel','1')");
}


session_start();
unset($_SESSION[$_GET['user']]);
session_destroy();


$aktif=mysqli_query($kon, "select * from client ");
$z=mysqli_fetch_array($aktif);

if($z['aktif']==0){
	echo"
<script src='js/jquery-3.2.1.min.js'></script>
<script>
if(screen.width <=699){
	document.location = 'and.php';
}else{
	document.location = 'index.php';
}
</script>


";
}else{

header ("location:finish.php?id=$user&mapel=$mapel");



}





?>