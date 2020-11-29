<?php

include "system/koneksi.php";

$acaksoal=mysqli_query($kon, "select * from acak");
$acakan=mysqli_fetch_array($acaksoal);

$idm=$_POST['id'];
$jml=$_POST['jum'];
$jmlmtk=$_POST['jum'] - 5;
$urutanessay=$_POST['jum'] - 4;
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
	
$sqlambilsoal = mysqli_query($kon, "select no_soal, kunci from soallistening where id_mapel = '$idm' order by no_soal LIMIT 15");
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
$sqlambilsoa345l = mysqli_query($kon, "select no_soal, kunci  from soalinggris where id_mapel = '$idm' order by RAND() LIMIT $jml");
	while($ambilsoalnya = mysqli_fetch_array($sqlambilsoa345l)){
	

	$acaksqle=mysqli_query($kon, "select a1,b1,c1,d1,e1 from pengacak order by RAND ()");
	$kk1=mysqli_fetch_array($acaksqle);
	
	$A11 = $kk1['a1'];
	$B11 = $kk1['b1'];
	$C11 = $kk1['c1'];
	$D11= $kk1['d1'];
	$E11 = $kk1['e1'];
	
$ceksoal22=mysqli_query($kon, "select urutan from $nama where id_mapel='$idm' and user='$user' and urutan='$urut' ");	
$ketemujawaban33=mysqli_num_rows($ceksoal22);
if($ketemujawaban33>0){
	
}else{
	$sql = mysqli_query($kon, "insert into $nama (id_mapel,urutan,tanya,j1,j2,j3,j4,j5,kunci,user, status, tanggal, waktu_awal, total_waktu,sisa_waktu) values ('$idm','$urut','$ambilsoalnya[no_soal]','$A11','$B11','$C11','$D11','$E11','$ambilsoalnya[kunci]','$user','1','$tgl', '$jam','$detik','$detik')"); 
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


 echo "<script>;window.location='home2.php?id=$idm&wkt=$_POST[id]&dtk=$detik&user=$user&no=1&jml=$jml&batas=15'</script>"; 
 
 
 
 
 
}

//non acak
else {
	
$sqlambilsoal = mysqli_query($kon, "select no_soal, kunci from soallistening where id_mapel = '$idm' order by no_soal LIMIT 15");
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
$sqlambilsoa345l = mysqli_query($kon, "select no_soal, kunci  from soalinggris where id_mapel = '$idm' order by no_soal LIMIT $jml");
	while($ambilsoalnya = mysqli_fetch_array($sqlambilsoa345l)){
	

	$acaksqle=mysqli_query($kon, "select a1,b1,c1,d1,e1 from pengacak order by RAND ()");
	$kk1=mysqli_fetch_array($acaksqle);
	
	
	
$ceksoal22=mysqli_query($kon, "select urutan from $nama where id_mapel='$idm' and user='$user' and urutan='$urut' ");	
$ketemujawaban33=mysqli_num_rows($ceksoal22);
if($ketemujawaban33>0){
	
}else{
	$sql = mysqli_query($kon, "insert into $nama (id_mapel,urutan,tanya,j1,j2,j3,j4,j5,kunci,user, status, tanggal, waktu_awal, total_waktu,sisa_waktu) values ('$idm','$urut','$ambilsoalnya[no_soal]','A','B','C','D','E','$ambilsoalnya[kunci]','$user','1','$tgl', '$jam','$detik','$detik')"); 
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


 echo "<script>;window.location='home2.php?id=$idm&wkt=$_POST[id]&dtk=$detik&user=$user&no=1&jml=$jml&batas=15'</script>"; 
 
 
 
 
 
}	


?>