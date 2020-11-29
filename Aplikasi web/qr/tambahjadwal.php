<?php
include "koneksi.php";
mysqli_query($kon, "INSERT INTO jadwal(jenis,jam_masuk,jam_pulang) VALUES ('$_POST[jenis]','$_POST[masuk]' , '$_POST[pulang]' )")or die ("Query Gagal ".mysql_error());

echo "<script>;window.location='home.php?state=jadwal'</script>";
?>