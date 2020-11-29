<?php
include "system/koneksi.php";
header("Content-type: application/vnd-ms-excel");
 

header("Content-Disposition: attachment; filename=Report Test.xls");
echo "

<table border='1'>	
<span style='text-align:center; font-size:30px;'>daftar Nilai</span>
 <tr><th>No.</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>No Ujian</th><th>Mapel</th><th>Jml Benar</th><th>Jml Salah</th><th>Nilai</th><th>Jawaban</th></tr>
		";		
	
	$sqlhasil=mysqli_query($kon, "select * from selesai order by id_mapel, no_ujian");
	$no=1;
				while($h=mysqli_fetch_array($sqlhasil)){
		$namanya=$h['id_mapel'].'jawaban';
		 echo "
			<tr><td>$no</td><td>";
			$peserta=mysqli_query($kon, "select * from peserta where no_ujian='$h[no_ujian]'");
			$n=mysqli_fetch_array($peserta);
			 echo " $n[nama]
			</td><td>$n[kelas]</td><td>$n[jurusan]</td><td>$n[no_ujian]</td>";
			$mapel=mysqli_query($kon, "select*from ujian where id_mapel='$h[id_mapel]'");
			$s=mysqli_fetch_array($mapel);
			echo "
			<td> $s[mapel]</td> "; 
			$hitung=mysqli_query($kon, "select count($namanya.nilai) as jml from $namanya WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='1'");
			$c=mysqli_fetch_array($hitung);
			$betul=$c['jml'];
			$hitung34=mysqli_query($kon, "select count($namanya.nilai) as jmlsalah from $namanya WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='0'");
			$cde=mysqli_fetch_array($hitung34);

$gg=mysqli_query($kon, "select * from ujian where id_mapel='$h[id_mapel]'");
$tp=mysqli_fetch_array($gg);
$spesialnya=$tp['spesial'];
if($spesialnya=='4'){
	$total=$tp['jumlah_soal'];

$kesalahan=mysqli_query($kon, "select * from soalpgessay where id_mapel='$h[id_mapel]'");
$mm=mysqli_fetch_array($kesalahan);
	$salah=$cde['jmlsalah']-$mm['jumlah_soal'];

}else{
			
			$hitung341=mysqli_query($kon, "select count($namanya.nilai) as jmltotal from $namanya WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]'");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];
			$salah=$cde['jmlsalah'];
		}
			
			$nilaiakhir=($betul/$total)*100;
		
			echo "
			<td>$betul</td><td>$salah</td><td>".round($nilaiakhir,2)."</td>
			<td>";


			$pilih=mysqli_query($kon, "select * from $namanya where user='$h[no_ujian]' and id_mapel='$h[id_mapel]' limit $total");
			while($n=mysqli_fetch_array($pilih)){
				$jawabnya=$n['jawab'];
				
				if($n['jawab']==''){ $pilihan='X';} else{ $pilihan=$jawabnya;}
				if($n['nilai']==1){
				echo "		
			
			
			
			$pilihan,  ";}else{
				echo "
			<font color='#FF0004'>$pilihan,  </font>";}	}
			echo"
			</td></tr>
			";
			$no++;
						}   
			
			echo "<script>;window.location='excel.php'</script>";
			
			
?>