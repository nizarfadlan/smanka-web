<?php
include "../system/koneksi.php";
$ret=mysqli_query($kon, "select * from admin ");
$rf=mysqli_fetch_array($ret);
$strhtml .= "
<div class='card2'>
<div class='header'>
<img src='../asset/logo.png' width='70px' style='float:left' />
<img src='../asset/tut.png' width='70px' style='float:right' />
<div class='judul3'> <font size='+8'>Report Test TOBK </font> </div>
<div class='judul4'><font size='+8'>$rf[nama_sekolah] </font></div>

</div>


<table border='1'>	

			<tr><th>No.</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>No Ujian</th><th>Mapel</th><th>Jml Benar</th><th>Jml Salah</th><th>Nilai</th><th>Jawaban</th></tr>
		";		
	
	$sqlhasil=mysqli_query($kon, "select * from selesai order by id_mapel, no_ujian");
	$no=1;
				while($h=mysqli_fetch_array($sqlhasil)){
		
		 $strhtml .= "
			<tr><td>$no</td><td>";
			$peserta=mysqli_query($kon, "select * from peserta where no_ujian='$h[no_ujian]'");
			$n=mysqli_fetch_array($peserta);
			 $strhtml .= " $n[nama]
			</td><td>$n[kelas]</td><td>$n[jurusan]</td><td>$n[no_ujian]</td>";
			$mapel=mysqli_query($kon, "select*from ujian where id_mapel='$h[id_mapel]'");
			$s=mysqli_fetch_array($mapel);
			$strhtml .= "
			<td> $s[mapel]</td> "; 
			$hitung=mysqli_query($kon, "select count(jawaban.nilai) as jml from jawaban WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='1'");
			$c=mysqli_fetch_array($hitung);
			$salah=$s['jumlah_soal'] - $c['jml'];
			$nilaiakhir=($c['jml']/$s['jumlah_soal'])*100;
			$strhtml .= "
			<td>$c[jml]</td><td>$salah</td><td>".round($nilaiakhir,2)."</td>
			<td>";
			$pilih=mysqli_query($kon, "select * from jawaban where user='$h[no_ujian]' and id_mapel='$h[id_mapel]'");
			while($n=mysqli_fetch_array($pilih)){
				$jawabnya=$n['jawab'];
				
				if($n['jawab']==''){ $pilihan='X';} else{ $pilihan=$jawabnya;}
				if($n['nilai']==1){
				$strhtml .= "		
			
			
			
			$pilihan,  ";}else{
				$strhtml .= "
			<font color='#FF0004'>$pilihan,  </font>";}	}
			echo"
			</td></tr>
			";
			$no++;
						}   
						
						
$strhtml .= "
<div class='kanan'>
	Kepala Sekolah <br><br><br><br>
	<div class='kepsek'><u>$rf[kepala_sekolah]</u></div>
	<div class='kepsek'> $rf[nip]</div>
	
</div>
";
require ('mpdf/mpdf.php');
$stylesheet = file_get_contents('css/cetak.css');
$fileName = 'CetakLaporan--' . date('d-m-Y') . '-' . date('h.i.s');

$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName. '.pdf','D');
	
			
			
?>