<?php
  include "koneksi.php";
 $id = $_POST['id_anggota'];
 
 mysqli_query($kon, "delete from izin where urutan='$id'")
										or die (mysql_error() );
			echo "<script>;window.location='rekapizin.php'</script>";								
?>