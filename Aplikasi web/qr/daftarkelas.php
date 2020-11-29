<?php
include "koneksi.php";
mysqli_query($kon,"INSERT INTO kelas(kelas) VALUES ('$_POST[kelas]' )")or die ("Query Gagal ".mysql_error());

echo "<script>;window.location='home.php?state=daftarkelas'</script>";
?>