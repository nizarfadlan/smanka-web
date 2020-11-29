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
	<div class='gambar1'><img src='../asset/jateng.png'></div>
	<div class='judulkop'><strong>PEMERINTAH PROPINSI JAWA TENGAH<br>
         DINAS PENDIDIKAN DAN KEBUDAYAAN <BR>
		SEKOLAH MENENGAH ATAS NEGERI 1 KALIWUNGU</strong></div>
		<div class='alamat'> Jalan : Pangeran Juminah Kaliwungu – Kendal Kode Pos 51372 Telp. (0294) 382567 <br>
		Surat elektronik : smakaliwungu@yahoo.co.id.  Website : www.sman1kaliwungu.sch.id.
		</div>
		 
</div>
<hr><div class='garis'><hr></div>





<div class='judulku'><h2> Rekap Presensi	dari tanggal $tanggalawal sampai $tanggalakhir</h2>	</div>	
	
	 <table cellspacing='0' cellpadding='0' border='1'>
	 <tr><th>Nama</th>";
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
$nama=mysql_query("select * from anggota ");
while($e=mysql_fetch_array($nama)){

$strhtml .= "
<tr><td>$e[nama]</td>";
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
				$saatdatang=strtotime($datang);
				$batasdatang=strtotime('07:00:00');
				if($batasdatang<$saatdatang){
				$warna='red';
				}else{
				$warna='black';
				}
				
				$ambilhari1=mysql_query("select * from temp where id_anggota='$id4' and status='1' and tanggal='$tglawal2'");
				$l=mysql_fetch_array($ambilhari1);
				$pulang=$l['jam'];
				$saatmulih=strtotime($pulang);
				$batasmulih=strtotime('15:30:00');
					if($batasmulih>$saatmulih){
					$warna1='red';
					}else{
					$warna1='black';
					}
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
		if($pulang=='HB' or $pulang=='I' or $pulang=='DL' or $pulang=='S' or $pulang=='Cuti' or $pulang=='OFF'){
			$warna1='black';
		}
		if($berangkat=='HB' or $berangkat=='I' or $berangkat=='DL' or $berangkat=='S' or $berangkat=='Cuti' or $berangkat=='OFF'){
			$warna='black';
		}
				$strhtml .= "
					<td align='center'><div style='color:$warna'>$berangkat</div><div style='color:$warna1'>$balik</div></td>";
	}
	}
				$tglawal2++;
		

				}

}

$strhtml .= " </tr></table>";	

$tandatangan=mysql_query("select * from sekolah");
$x=mysql_fetch_array($tandatangan);
$strhtml .= "
	</table>
	<br><br><br>
<div class='tandatangan'>
	<div class='kepsek'>Mengetahui Kepala Sekolah <div><br><br><br><br>
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