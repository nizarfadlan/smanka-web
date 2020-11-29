<?php
include "system/koneksi.php";
$tgl=date('d-m-Y');
$jam=date('H:i:s');
$urut=1;
for ($i=0; $i<9000000; $i++){
$nosoal=rand(1,30);
$user=rand(101,110);

$acaksql=mysqli_query($kon, "select * from pengacak order by RAND ()");
	$kk=mysqli_fetch_array($acaksql);
	
	$A1 = $kk['a1'];
	$B1 = $kk['b1'];
	$C1 = $kk['c1'];
	$D1 = $kk['d1'];
	$E1 = $kk['e1'];
	
	$sql = mysqli_query($kon, "insert into matmipa12jawaban (id_mapel,urutan,tanya,j1,j2,j3,j4,j5,kunci,user, status, tanggal, waktu_awal, total_waktu,sisa_waktu) 
	values ('MATMIPA12','$urut','$nosoal','$A1','$B1','$C1','$D1','$E1','A','$user','1','$tgl', '$jam','3600','3600')"); 

$urut = $urut+1;
}	

?>