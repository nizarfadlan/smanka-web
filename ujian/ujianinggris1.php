<?php


include "system/koneksi.php";

$idm=$_POST['id'];
$jml=$_POST['jum'];
$waktu=$_POST['wkt'];

$tgl=date('d-m-Y');
$userr=$_POST['user'];
$nama=$idm.'jawaban';
$urut = 1;

$minimal=mysqli_query($kon, "select MIN(sisa_waktu) as waktusisa from $nama where user='$userr' and id_mapel='$idm' and sisa_waktu<>0");
$a=mysqli_fetch_array($minimal);
$detik=$a['waktusisa'];
mysqli_query($kon, "update $nama set tambahan='$detik' where user='$userr' and id_mapel='$idm'")
or die ("SQL Error: ".mysql_error());
mysqli_query($kon, "update status set status='1' where user='$userr' and id_mapel='$idm'")
or die ("SQL Error: ".mysql_error());

session_start();
unset($_SESSION['$userr']);
session_destroy();

 echo "<script>;window.location='home2.php?id=$idm&dtk=$detik&user=$userr&no=1&jml=$jml'</script>";
?>