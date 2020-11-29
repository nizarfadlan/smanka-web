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
<link rel='stylesheet' href='css/tabel.css'>

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
	
	
	
	$masuk=mysql_query("select * from temp where tanggal='$mulai' and id_anggota='$id' and jam<='12:00:00' ");
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
				$warna2='red';
	}else{
		$status3='';
		$warna2='black';
	}
	}
	if($teko=='HB' or $teko=='I' or $teko=='L' or $teko=='S' or $teko=='OFF'){
			$warna2='black';
		}
	
	echo "<td style='color:$warna2'>$s[jam]</td> ";
	
	$masuk1=mysql_query("select * from temp where tanggal='$mulai' and id_anggota='$id' and jam>='12:00:00' ");
	$u=mysql_fetch_array($masuk1);
	$mulih=$u['jam'];
	$saatmulih=strtotime($mulih);
	$batasmulih=strtotime('15:15:00');
	
	if(empty($mulih)){
		$status4='';
		$warna1='black';
	}else {
	if($batasmulih>$saatmulih){
					$status4='B';
					$warna1='red';
	}else{
		$status4='';
		$warna1='black';
	}
	}
	if($mulih=='HB' or $mulih=='I' or $mulih=='DL' or $mulih=='S' or $mulih=='OFF'){
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

?>