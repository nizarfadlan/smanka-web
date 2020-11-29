<?php
include "../system/koneksi.php";
$testnya=mysqli_query($kon, "select * from test ");
$w=mysqli_fetch_array($testnya);
$fafa=mysqli_query($kon, "select * from kop");
$ek=mysqli_fetch_array($fafa);	
$sekolah=$ek['nama_sekolah'];


$fafa2=mysqli_query($kon, "select * from admin");
$rf=mysqli_fetch_array($fafa2);	

$peserta =mysqli_query($kon, "select * from peserta ");
while($kl=mysqli_fetch_array($peserta)){
$nama1=$kl['nama'];
$user=$kl['no_ujian'];



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
<div class='judulsurat'> LAPORAN $w[nama_test]</div><br><br><br><br>
<div class='data'>
<table>
<tr><td>Nama</td><td> &nbsp;  &nbsp; : &nbsp;  &nbsp; </td><td>$kl[nama]</td></tr>
<tr><td>NIS</td><td> &nbsp;  &nbsp; : &nbsp;  &nbsp; </td><td>$kl[nis]</td></tr>
<tr><td>No Ujian</td><td> &nbsp;  &nbsp; : &nbsp;  &nbsp; </td><td>$kl[no_ujian]</td></tr>
<tr><td>Kelas</td><td> &nbsp;  &nbsp; : &nbsp;  &nbsp; </td><td>$kl[kelas] $kl[jurusan]</td></tr>
</table>
</div>
<div class='foto'><img src='../assets/code/RAPORT $kl[no_ujian].png'></div>

<br>
<div class='data'>
 <table class='table table-bordered'>
                  
		<tr><th>No.</th><th>Mata Pelajaran</th><th>Nilai</th></tr>
			";
			$no=1;
        $qqq=mysqli_query($kon, "select * from raport where no_ujian='$user'");
		while($rt=mysqli_fetch_array($qqq)){
			
			
			
			
			
        
 $strhtml .= "			
		
			<tr><td class='tengah'>$no</td><td>$rt[pelajaran]</td> <td class='tengah'>$rt[nilai]</td></tr> ";
			$no++;
		}
			$hitung=mysqli_query($kon, "select sum(raport.nilai) as total from raport WHERE no_ujian='$user'");
			$c=mysqli_fetch_array($hitung);
			$jumlah=$c['total'];
			
			$hitung2=mysqli_query($kon, "select avg(raport.nilai) as bagi from raport WHERE no_ujian='$user'");
			$c1=mysqli_fetch_array($hitung2);
			$rata=$c1['bagi'];
			
			
	 $strhtml .= "	
		<tr><td colspan='2'>Jumlah</td><td class='tengah'>$jumlah</td></tr>
		<tr><td colspan='2'>Rata-rata</td><td class='tengah'>".round($rata,2)."</td></tr>
            </table>
			</div>
		<br><br><br><br><br>	
	<div class='barcode1'> ";
	if(empty($kl['foto'])){
		 $strhtml .= "
		<img src='../asset/foto.jpg' width='130px'> ";
	} else {
		 $strhtml .= "
	<img src='../foto/thumbs/$kl[foto]' width='130px'> ";
	}
	 $strhtml .= "
	</div>	
	
	<div class='tandatangan1'>
	$w[tanggal] <br>
	Kepala Sekolah <br><br><br><br><br>
	<div class='kepsek'><u>$rf[kepala_sekolah]</u></div>
	<div class='kepsek'> $rf[nip]</div>
	
	</div>
	
	</div><br><br><br><br><br><br>
			";
}
require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('css/surat.css');
$fileName = 'RaportSiswa'  ;


$mpdf = new mPDF('utf-8',array(215,295));

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName.' '.$sekolah. '.pdf','D');

?>