<?php


include "../koneksi.php";
include "../tanggalbaru.php";
	$kirim1=$_POST['tgl1'];
	$kirim2=$_POST['tgl2'];
$bulanku=$_POST['tgl1'];
$tanggalawal=bulan($kirim1);
$tanggalakhir=bulan($kirim2);
$namanya1=mysql_query("select * from sekolah ");
$u=mysql_fetch_array($namanya1);
$strhtml .= "

<link rel='stylesheet' href='css/model.css'>

<div class='kopsurat1'>
	<div class='gambar1'><img src='../asset/$u[logo]' width='75px'></div>
	<div class='judulkop'><strong>PEMERINTAH KABUPATEN KENDAL<br>
         UPT DINAS PENDIDIKAN DAN KEBUDAYAAN KEC. PATEBON <BR>
		$u[nama_sekolah]</strong></div>
		<div class='alamat'> Alamat : Jl. Raden Patah Km 3 Desa Magersari Kec. Patebon , Kendal</div>
		 
</div>
<hr><div class='garis'><hr></div>


<br>



<div class='judulku'><h2> Rekap Presensi	dari tanggal $tanggalawal sampai $tanggalakhir</h2>	</div>	
	
	 <table cellspacing='0' cellpadding='0' border='1'>
	 <tr><th>No</th><th>Nama</th><th>NIP</th>";
$tglawal1=$_POST['tgl1'];
$tglakhir1=$_POST['tgl2'];

$tgl = substr($tglawal1, 8, 2);

 for ($i=$tglawal1 ; $i<=$tglakhir1 ; $i++ ){
	$hari=hari ($tglawal1);
	$strhtml .= "
	<th align='center'>$tgl <br> $hari </th>";
	$tglawal1++;
	$tgl++;
}

$strhtml .= "</tr>

<tr>";
$no=1;
$nama=mysql_query("select * from anggota where sertifikasi='1' ");
while($e=mysql_fetch_array($nama)){

$strhtml .= "
<tr><td>$no</td><td>$e[nama]</td><td>$e[nip]</td>";
			$tglawal2=$_POST['tgl1'];
			$tglakhir2=$_POST['tgl2'];
			$id4=$e['id_anggota'];
			for ($g=$tglawal2 ; $g<=$tglakhir2 ; $g++ ){
			$hari1=hari ($tglawal2);	
			
	$carioff=mysql_query("select * from jadwal_kerja where id_anggota='$id4' and $hari1='OFF'");
	$find=mysql_num_rows($carioff);
	$d=mysql_fetch_array($carioff);
	if ($find>0){
		$strhtml .= "
		<td align='center'>OFF</td>";
	}else{	
				
				
				
				
				
				
				
				
				
				
				
				$ambilhari=mysql_query("select * from temp where id_anggota='$id4' and status='0' and tanggal='$tglawal2' ");
				$k=mysql_fetch_array($ambilhari);
				$datang=$k['jam'];
				
	
				$ambilhari1=mysql_query("select * from temp where id_anggota='$id4' and status='1' and tanggal='$tglawal2'");
				$l=mysql_fetch_array($ambilhari1);
				$pulang=$l['jam'];
				if(empty($datang)){
					$berangkat='TAM';
				}else{
					$berangkat=$datang;
				}
				if(empty($pulang)){
					$balik='TAP';
				}else{
					$balik=$pulang;
				}
	if($berangkat=='TAM' and $balik=='TAP'){
		$strhtml .= "<td align='center'>A</td>";
	}else{
				$strhtml .= "
					<td align='center'>$berangkat<br>$balik</td>";
	}
	}
				$tglawal2++;
		$no++;

				}

}

$strhtml .= " </tr></table>";	

$tandatangan=mysql_query("select * from sekolah");
$x=mysql_fetch_array($tandatangan);
$strhtml .= "
	</table>
	<br><br><br><br><br>
<div class='tandatangan'>
	<div class='kepsek'>Mengetahui Kepala Sekolah <br> $x[nama_sekolah]<div><br><br><br>
	<div class='nama'>$x[kepsek]<br>NIP. $x[nip]</div>
</div> ";

require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('css/tabel2.css');
$fileName = 'Rekap Presensi dari tanggal '.$tanggalawal.' sampai '.$tanggalakhir;


$mpdf = new mPDF('utf-8',array(330,215));

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName. '.pdf','D');				
?>