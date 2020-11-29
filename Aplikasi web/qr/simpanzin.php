<?php

include "koneksi.php";

$cek=mysqli_query($kon,"select * from izin where tanggal='$_POST[tgl]' and id_anggota='$_POST[id]'");
$cari=mysqli_num_rows($cek);
$g=mysqli_fetch_array($cek);
if($cari>0){
	
mysqli_query($kon, "UPDATE izin SET 
							izin='$_POST[izin]',
							nama='$_POST[nama]',
							nis='$_POST[nis]',
							kelas='$_POST[kelas]',
							
						
								keterangan='$_POST[keterangan]'
							
								
								where id_anggota='$_POST[id]' and tanggal='$_POST[tgl]'")
							 or die ("SQL Error: ".mysql_error());
							
}else{

mysqli_query($kon, "INSERT INTO izin(id_anggota,tanggal,keterangan,izin,nama,nis,kelas) VALUES ('$_POST[id]', '$_POST[tgl]', '$_POST[keterangan]' , '$_POST[izin]','$_POST[nama]','$_POST[nis]','$_POST[kelas]')")or die ("Query Gagal ".mysql_error());


}	

echo "<script>;window.location='home.php?state=izin'</script>";

?>