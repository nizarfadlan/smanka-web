<?php
include "../system/koneksi.php";
$testnya=mysqli_query($kon, "select * from test ");
$w=mysqli_fetch_array($testnya);
$fafa=mysqli_query($kon, "select * from kop");
$ek=mysqli_fetch_array($fafa);	
$sekolah=$ek['nama_sekolah'];
$mapel1=$_GET['mapel'];
$nama=$mapel1.'jawaban';
$fafa2=mysqli_query($kon, "select * from admin");
$rf=mysqli_fetch_array($fafa2);	

$strhtml .= "


<div class='kotak'>
		<div class='kotak1'><img src='../asset/$ek[foto]' width='100px'></div>
		<div class='kotak2'>
				<div class='pemerintah'>$ek[pemerintah]</div>
				<div class='dinas'>$ek[dinas]</div>
				<div class='sekolah'>$ek[nama_sekolah]</div>
				<div class='alamat'>$ek[alamat]</div>
				<div class='tambahan'>$ek[tambahan]</div>
		</div>
		
</div>


<hr>
<br>
<div class='judulsurat'> LAPORAN $w[nama_test] </div><br>

 <table class='table table-bordered'>
                  
		<tr><th>No.</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>No Ujian</th><th>Mapel</th><th>Jml Benar</th><th>Jml Salah</th><th>Tdk Jwb</th><th>Nilai</th></tr>
			";
               			
         $sqlhasil=mysqli_query($kon, "select * from selesai where id_mapel='$mapel1' order by id_mapel, no_ujian");
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
			$hitung=mysqli_query($kon, "select count($nama.nilai) as jml from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='1'");
			$c=mysqli_fetch_array($hitung);
			$betul=$c['jml'];
			$hitung34=mysqli_query($kon, "select count($nama.nilai) as jmlsalah from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='0'");
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
			
			$hitung341=mysqli_query($kon, "select count($nama.nilai) as jmltotal from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]'");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];
			$salah=$cde['jmlsalah'];
		}
			$nilaiakhir=($betul/$total)*100;
		
			$strhtml .= "
			<td>$betul</td><td>$salah</td><td>";
			
			$hitung2=mysqli_query($kon, "select count($nama.jawab) as jml2 from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and jawab=''");
			$d=mysqli_fetch_array($hitung2);
			
			$strhtml .= "$d[jml2]
			</td><td>".round($nilaiakhir,2)."</td></tr>
			";
			$no++;
		
			}
 $strhtml .= "

            </table>
		<br><br><br>	
	<div class='barcode'><img src='../assets/code/laporan.png'>	
	
	<div class='tandatangan'>
	$w[tanggal]<br>
	Kepala Sekolah <br><br><br><br>
	<div class='kepsek'><u>$rf[kepala_sekolah]</u></div>
	<div class='kepsek'> $rf[nip]</div>
	
	</div>
	
	</div>
			";

require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('css/surat.css');
$fileName = 'Report ujian '.$s[mapel]  ;


$mpdf = new mPDF('utf-8',array(215,330));

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output( $fileName.' '.$sekolah. '.pdf','D');
		

?>