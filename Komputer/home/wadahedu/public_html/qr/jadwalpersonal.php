<?php
include "koneksi.php";
$cek=mysqli_query($kon, "select * from jadwal_kerja where id_anggota='$_POST[id]'");
$cari=mysqli_num_rows($cek);
$g=mysqli_fetch_array($cek);
if(empty($_POST['senin'])){$senin='OFF';} else { $senin='ON'; }
if(empty($_POST['selasa'])){$selasa='OFF';} else { $selasa='ON'; }
if(empty($_POST['rabu'])){$rabu='OFF';} else { $rabu='ON'; }
if(empty($_POST['kamis'])){$kamis='OFF';} else { $kamis='ON'; }
if(empty($_POST['jumat'])){$jumat='OFF';} else { $jumat='ON'; }
if(empty($_POST['sabtu'])){$sabtu='OFF';} else { $sabtu='ON'; }
if(empty($_POST['minggu'])){$minggu='OFF';} else { $minggu='ON'; }
if($cari>0){



	
	mysqli_query($kon, "UPDATE jadwal_kerja SET nama='$_POST[nama]',
								senin='$senin',
								selasa='$selasa',
								rabu='$rabu',
								kamis='$kamis',
								jumat='$jumat',
								sabtu='$sabtu',
								minggu='$minggu'
							
								
								where id_anggota='$_POST[id]'")
							 or die ("SQL Error: ".mysql_error());
} else {
	
mysqli_query($kon, "INSERT INTO jadwal_kerja(id_anggota,nama,senin,selasa,rabu,kamis,jumat,sabtu,minggu)VALUES ('$_POST[id]', '$_POST[nama]' , '$senin' ,'$selasa' , '$rabu' ,'$kamis' , '$jumat' , '$sabtu' , '$minggu') ")or die ("Query Gagal ".mysql_error());	
	
}
echo "<script>;window.location='home.php?state=jadwalpersonal'</script>";
?>