<?php
include "../koneksi.php";
include "../tanggalbaru.php";
$id=$_POST['id_anggota'];
$tahun=$_POST['tahun'];
$bulan=$_POST['bulan'];
$namanya=mysql_query("select * from anggota where id_anggota='$id' ");
$f=mysql_fetch_array($namanya);
if($bulan=='01'){$bulannya='Januari';}
if($bulan=='02'){$bulannya='Februari';}
if($bulan=='03'){$bulannya='Maret';}
if($bulan=='04'){$bulannya='April';}
if($bulan=='05'){$bulannya='Mei';}
if($bulan=='06'){$bulannya='Juni';}
if($bulan=='07'){$bulannya='Juli';}
if($bulan=='08'){$bulannya='Agustus';}
if($bulan=='09'){$bulannya='September';}
if($bulan=='10'){$bulannya='Oktober';}
if($bulan=='11'){$bulannya='November';}
if($bulan=='12'){$bulannya='Desember';}
$kalender= CAL_GREGORIAN;
$wulan=date('m');
$taun=date('Y');
$jmlhari=cal_days_in_month($kalender, $wulan, $taun);
$akhir=$jmlhari;
$tglawal=$tahun . '-' .$bulan. '-01';

$namanya1=mysql_query("select * from sekolah ");
$u=mysql_fetch_array($namanya1);

echo "
<link rel='stylesheet' href='css/model.css'>

<div class='kopsurat'>
	<div class='gambar'><img src='../asset/jateng.png' width='100px'></div>
	<div class='judulkop'><strong><strong>PEMERINTAH PROPINSI JAWA TENGAH<br>
         DINAS PENDIDIKAN DAN KEBUDAYAAN <BR>
		SEKOLAH MENENGAH ATAS NEGERI 1 KALIWUNGU</strong></div>
		<div class='alamat1'> Jalan : Pangeran Juminah Kaliwungu – Kendal Kode Pos 51372 Telp. (0294) 382567 <br>
		Surat elektronik : smakaliwungu@yahoo.co.id.  Website : www.sman1kaliwungu.sch.id.</div>
		 

<hr><div class='garis'><hr></div>


</div><br>
Rekap Personal $f[nama] Bulan $bulannya Tahun $tahun 
<table cellspacing='0' cellpadding='0' border='1'>
<tr><th>No</th><th width='210px'>Tanggal</th><th>Jam Masuk</th><th>Jam Pulang</th><th>Status</th><th width='400px'>keterangan</th></tr>";
$tgl=1;
$mulai=$tglawal;
 for ($i=1 ; $i<=$akhir ; $i++ ){
	$lengkap=tgl_ind($mulai);
	$hari=hari($mulai);
	
	
	
	echo "
	<tr><td align='center'>$tgl</td><td>$lengkap</td>";
	$carioff=mysql_query("select * from jadwal_kerja where id_anggota='$id' and $hari='OFF'");
	$find=mysql_num_rows($carioff);
	$d=mysql_fetch_array($carioff);
	if ($find>0){
		echo "
		<td>OFF</td><td>OFF</td><td>OFF</td><td > OFF </td></tr>";
	}else{
	
	
	
	$masuk=mysql_query("select * from temp where tanggal='$mulai' and id_anggota='$id' and status='0' ");
	$s=mysql_fetch_array($masuk);
	$teko=$s['jam'];
	$ket=$s['izin'];
	$saatdatang=strtotime($teko);
	$batasdatang=strtotime('07:00:00');
	
	if(empty($teko)){
		$status3='';
	}else{
		
			
	if($batasdatang<$saatdatang){
					$status3='T';
				$warna='red';
	}else{
		$status3='';
		$warna='black';
	}
	}
	if($teko=='HB' or $teko=='I' or $teko=='DL' or $teko=='S' or $teko=='Cuti'or $teko=='OFF'){
			$warna='black';
		}
	
	echo " <td style='color:$warna'>$s[jam]</td> ";
	$masuk1=mysql_query("select * from temp where tanggal='$mulai' and id_anggota='$id' and status='1' ");
	$u=mysql_fetch_array($masuk1);
	$mulih=$u['jam'];
	$saatmulih=strtotime($mulih);
	$batasmulih=strtotime('15:30:00');
	
	if(empty($mulih)){
		$status4='';
		$warna1='black';
	}else {
	if($batasmulih>$saatmulih){
					$status4='P';
					$warna1='red';
	}else{
		$status4='';
		$warna1='black';
	}
	}
	if($mulih=='HB' or $mulih=='I' or $mulih=='DL' or $mulih=='S' or $mulih=='Cuti' or $mulih=='OFF'){
			$warna1='black';
		}
	
	echo " <td style='color:$warna1'>$u[jam]</td>";
	
	
	if(empty($teko)){
		$status1='TAM';
	}else{
		$status1='';
	}
	if(empty($mulih)){
		$status2='TAP';
		$status4='';
	}else{
		$status2='';
	}
	
	if($status1=='TAM' and $status2=='TAP'){
		echo "<td width='90px'>A</td>";
	}else{
		
		if($mulih=='HB' or $mulih=='I' or $mulih=='DL' or $mulih=='S' or $mulih=='Cuti' or $mulih=='OFF'){
			$status4='';
		}
		if($teko=='HB' or $teko=='I' or $teko=='DL' or $teko=='S' or $teko=='Cuti' or $teko=='OFF'){
			$status3='';
		}
		
		
				echo "
					<td width='90px'> $status3  $status1 $status4 $status2 </td>";
	}
	echo "<td>$s[keterangan]</td></tr> ";
	}

	$mulai++;
	$tgl++;
}
$tandatangan=mysql_query("select * from sekolah");
$x=mysql_fetch_array($tandatangan);
echo "
	</table>
	<br><br>
<div class='tandatangan'>
	<div class='kepsek'>Mengetahui Kepala Sekolah <br><div><br><br><br><br>
	<div class='nama'>$x[kepsek]<br>NIP. $x[nip]</div>
</div> ";
/*
require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('css/tabel.css');
$fileName = 'Rekap Presensi '.$f[nama].' Bulan '.$bulannya.' Tahun '.$tahun;


$mpdf = new mPDF('utf-8',array(215,330));

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName. '.pdf','D');
*/
?>