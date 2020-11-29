<?php
include "koneksi.php";

include "thumbs2.php";
		$file  = $_FILES['file4']['name'];

		if(empty($file)){


mysqli_query($kon, "INSERT INTO anggota(nis,kelas,nama,username,password,foto) VALUES ('$_POST[nis]','$_POST[kelas]' , '$_POST[nama]','$_POST[username]','$_POST[password]','' )")or die (mysqli_error($kon));

}else{

mysqli_query($kon, "INSERT INTO anggota(nis,kelas,nama,username,password,foto) VALUES ('$_POST[nis]','$_POST[kelas]' , '$_POST[nama]','$_POST[username]','$_POST[password]','$file' )")or die (mysqli_error($kon));

}
$cariid=mysqli_query($kon, "select * from anggota where nis='$_POST[nis]' ");
$r=mysqli_fetch_array($cariid);
mysqli_query($kon, "INSERT INTO jadwal_kerja(id_anggota,nama,senin,selasa,rabu,kamis,jumat,sabtu,minggu) VALUES ('$r[id_anggota]','$_POST[nama]' , 'ON' ,'ON' ,'ON' ,'ON' ,'ON' ,'OFF','OFF')")or die (mysqli_error($kon));
echo "<script>;window.location='home.php?state=daftar'</script>";
?>