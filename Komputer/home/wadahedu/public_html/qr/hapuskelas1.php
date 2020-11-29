<?php
  include "koneksi.php";
 $id = $_POST['id_anggota'];
 
 mysqli_query($kon, "delete from kelas where kelas='$id'")
										or die (mysql_error() );
			echo "<script>;window.location='home.php?state=daftarkelas'</script>";								
?>