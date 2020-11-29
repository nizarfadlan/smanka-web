<?php
include "system/koneksi.php";

$user=$_GET['ujian'];
$mapel=$_GET['mapel'];

mysqli_query($kon, "delete from selesai where no_ujian='$user' and id_mapel='$mapel'")
										or die (mysqli_error() );


 echo "<script>;window.location='admin.php?bagian=home'</script>";
?>