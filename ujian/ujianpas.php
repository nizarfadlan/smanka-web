<?php

include "system/koneksi.php";
$acaksoal=mysqli_query($kon, "select aktif from acak");
$acakan=mysqli_fetch_array($acaksoal);
$idm=$_POST['id'];
$erte=mysqli_query($kon, "select * from soalpgessay where id_mapel='$idm'");
$v=mysqli_fetch_array($erte);

$bataspg=$v['jumlah_soal'];

$jml=$_POST['jum'];
$jmlpg=$_POST['jum'] - $bataspg;
$waktu=$_POST['wkt'];
$detik=$waktu * 60;
$tgl=date('d-m-Y');
$user=$_POST['user'];
$nama=$idm.'jawaban';
$jam=date('H:i:s');
$urut = 1;

$mysqliuser=mysqli_query($kon, "select nama from peserta where no_ujian='$user'");
$e=mysqli_fetch_array($mysqliuser);	
$namaku1=$e['nama'];
$namaku = mysqli_real_escape_string($kon, $namaku1);


if($acakan['aktif']==1){
	
$sqlambilsoal = mysqli_query($kon, "select no_soal,kunci from soalpg where id_mapel = '$idm' order by RAND() LIMIT $jmlpg");
	while($ambilsoal = mysqli_fetch_array($sqlambilsoal)){
	

	
	$acaksql=mysqli_query($kon, "select a1,b1,c1,d1,e1 from pengacak order by RAND ()");
	$kk=mysqli_fetch_array($acaksql);
	
	$A1 = $kk['a1'];
	$B1 = $kk['b1'];
	$C1 = $kk['c1'];
	$D1 = $kk['d1'];
	$E1 = $kk['e1'];
	
$ceksoal=mysqli_query($kon, "select urutan from $nama where id_mapel='$idm' and user='$user' and urutan='$urut' ");	
$ketemujawaban=mysqli_num_rows($ceksoal);
if($ketemujawaban>0){
}else{
	$sql = mysqli_query($kon, "insert into $nama (id_mapel,urutan,tanya,j1,j2,j3,j4,j5,kunci,user, status, tanggal, waktu_awal, total_waktu,sisa_waktu) values ('$idm','$urut','$ambilsoal[no_soal]','$A1','$B1','$C1','$D1','$E1','$ambilsoal[kunci]','$user','1','$tgl', '$jam','$detik','$detik')"); 
}
$urut = $urut+1;
	}
	

$urut;	
$sqlambilsoa345l = mysqli_query($kon, "select no_soal from soalpgessay where id_mapel = '$idm' order by RAND() LIMIT $bataspg");
	while($ambilsoalnya = mysqli_fetch_array($sqlambilsoa345l)){
	

	
$ceksoal22=mysqli_query($kon, "select urutan from $nama where id_mapel='$idm' and user='$user' and urutan='$urut' ");	
$ketemujawaban33=mysqli_num_rows($ceksoal22);
if($ketemujawaban33>0){
	
}else{
	$sql = mysqli_query($kon, "insert into $nama (id_mapel,urutan,tanya,user, status, tanggal, waktu_awal, total_waktu,sisa_waktu) values ('$idm','$urut','$ambilsoalnya[no_soal]','$user','1','$tgl', '$jam','$detik','$detik')"); 
}
$urut = $urut+1;
	}	
	
	
	
	$sqlstatus=mysqli_query($kon, "select user from status where user='$user' and id_mapel='$idm' ");
	$ketemustatus=mysqli_num_rows($sqlstatus);
if($ketemustatus>0){
}else{
$sql9=mysqli_query($kon, "insert into status (user, id_mapel, status, nama) values ('$user', '$idm', '1', '$namaku')");
}
session_start();
unset($_SESSION['$user']);
session_destroy();

echo "<script>;window.location='home4.php?id=$idm&wkt=$_POST[id]&dtk=$detik&user=$user&no=1&jml=$jml&batas=$jmlpg'</script>"; 
 
 
 
 
 
}

//non acak
else {
	
	
$sqlambilsoal = mysqli_query($kon, "select no_soal,kunci from soalpg where id_mapel = '$idm' order by no_soal LIMIT $jmlpg");
	while($ambilsoal = mysqli_fetch_array($sqlambilsoal)){
	
	
$ceksoal=mysqli_query($kon, "select urutan from $nama where id_mapel='$idm' and user='$user' and urutan='$urut' ");	
$ketemujawaban=mysqli_num_rows($ceksoal);
if($ketemujawaban>0){
}else{
	$sql = mysqli_query($kon, "insert into $nama (id_mapel,urutan,tanya,j1,j2,j3,j4,j5,kunci,user, status, tanggal, waktu_awal, total_waktu,sisa_waktu) values ('$idm','$urut','$ambilsoal[no_soal]','A','B','C','D','E','$ambilsoal[kunci]','$user','1','$tgl', '$jam','$detik','$detik')"); 
}
$urut = $urut+1;
	}
	

$urut;	
$sqlambilsoa345l = mysqli_query($kon, "select no_soal from soalpgessay where id_mapel = '$idm' order by no_soal LIMIT $bataspg");
	while($ambilsoalnya = mysqli_fetch_array($sqlambilsoa345l)){
	

	
$ceksoal22=mysqli_query($kon, "select urutan from $nama where id_mapel='$idm' and user='$user' and urutan='$urut' ");	
$ketemujawaban33=mysqli_num_rows($ceksoal22);
if($ketemujawaban33>0){
	
}else{
	$sql = mysqli_query($kon, "insert into $nama (id_mapel,urutan,tanya,user, status, tanggal, waktu_awal, total_waktu,sisa_waktu) values ('$idm','$urut','$ambilsoalnya[no_soal]','$user','1','$tgl', '$jam','$detik','$detik')"); 
}
$urut = $urut+1;
	}	
	
	
	
	$sqlstatus=mysqli_query($kon, "select user from status where user='$user' and id_mapel='$idm' ");
	$ketemustatus=mysqli_num_rows($sqlstatus);
if($ketemustatus>0){
}else{
$sql9=mysqli_query($kon, "insert into status (user, id_mapel, status, nama) values ('$user', '$idm', '1', '$namaku')");
}
session_start();
unset($_SESSION['$user']);
session_destroy();

echo "<script>;window.location='home4.php?id=$idm&wkt=$_POST[id]&dtk=$detik&user=$user&no=1&jml=$jml&batas=$jmlpg'</script>"; 	
	
	
	
}

?>