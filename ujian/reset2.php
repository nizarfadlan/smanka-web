<?php
include "system/koneksi.php";

mysqli_query($kon, "update status set status='0'where user='$_GET[user]' and id_mapel='$_GET[id]'")
or die ("SQL Error: ".mysql_error());

 echo "<script>;window.location='reset.php'</script>";

?>