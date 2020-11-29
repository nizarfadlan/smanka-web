<?php
include "../system/koneksi.php";
$fafa=mysqli_query($kon, "select * from kop");
$ek=mysqli_fetch_array($fafa);	
$sekolah=$ek['nama_sekolah'];


$fafa2=mysqli_query($kon, "select * from admin");
$rf=mysqli_fetch_array($fafa2);	

$strhtml .= "


<link rel='stylesheet' href='css/surat.css'>

<div class='kotak'>
		<div class='kotak1'><img src='../asset/kop.png' width='100px'></div>
		<div class='kotak2'>
				<div class='pemerintah'>$ek[pemerintah]</div>
				<div class='dinas'>$ek[dinas]</div>
				<div class='sekolah'>$ek[nama_sekolah]</div>
				<div class='alamat'>$ek[alamat]</div>
				<div class='tambahan'>$ek[tambahan]</div>
		</div>
		<div class='kotak3'><img src='../asset/logo.png' width='100px'></div>
</div>


<hr>
<br>
<div class='judulsurat'> LAPORAN TRY OUT BERBASIS KOMPUTER </div><br>

 <table class='table table-bordered'>
                  
		<tr><th>No.</th><th>Nama</th><th>Kelas</th><th>No Ujian</th><th>Mapel</th><th>Jml Benar</th><th>Jml Salah</th><th>Tdk Jwb</th><th>Nilai</th></tr>
			";
               			
         $sqlhasil=mysqli_query($kon, "select * from selesai order by id_mapel, no_ujian");
	$no=1;
				while($h=mysqli_fetch_array($sqlhasil)){
 $strhtml .= "
			<tr><td>$no</td><td>";
			$peserta=mysqli_query($kon, "select * from peserta where no_ujian='$h[no_ujian]'");
			$n=mysqli_fetch_array($peserta);
			 $strhtml .= " $n[nama]
			</td><td>$n[kelas]</td><td>$n[no_ujian]</td>";
			$mapel=mysqli_query($kon, "select*from ujian where id_mapel='$h[id_mapel]'");
			$s=mysqli_fetch_array($mapel);
			$strhtml .= "
			<td> $s[mapel]</td> "; 
			$hitung=mysqli_query($kon, "select count(jawaban.nilai) as jml from jawaban WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='1'");
			$c=mysqli_fetch_array($hitung);
			$betul=$c['jml'];
			$hitung34=mysqli_query($kon, "select count(jawaban.nilai) as jmlsalah from jawaban WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='0'");
			$cde=mysqli_fetch_array($hitung34);
			
			$hitung341=mysqli_query($kon, "select count(jawaban.nilai) as jmltotal from jawaban WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]'");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];
			$salah=$cde['jmlsalah'];
			$nilaiakhir=($betul/$total)*100;
		
			$strhtml .= "
			<td>$betul</td><td>$salah</td><td>";
			
			$hitung2=mysqli_query($kon, "select count(jawaban.jawab) as jml2 from jawaban WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and jawab=''");
			$d=mysqli_fetch_array($hitung2);
			
			$strhtml .= "$d[jml2]
			</td><td>".round($nilaiakhir,2)."</td></tr>
			";
			$no++;
		
			}
 $strhtml .= "

            </table>
		<br><br><br>	
	<div class='barcode'><img src='../assets/code/Reportujian$sekolah.png'>	
	
	<div class='tandatangan'>
	Kepala Sekolah <br><br><br><br>
	<div class='kepsek'><u>$rf[kepala_sekolah]</u></div>
	<div class='kepsek'> $rf[nip]</div>
	
	</div>
	
	</div>
			";

require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('css/surat.css');
$fileName = 'Reportujian'  ;


$mpdf = new mPDF('utf-8',array(215,330));

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName.' '.$sekolah. '.pdf','D');
		

?>