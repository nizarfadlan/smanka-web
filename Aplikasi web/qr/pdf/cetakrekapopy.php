<?php
include "../koneksi.php";
include "../tanggalbaru.php";
$id=$_POST['id_anggota'];
$tahun=$_POST['tahun'];
$bulan=$_POST['bulan'];
$namanya=mysqli_query($kon, "select * from anggota where id_anggota='$id' ");
$f=mysqli_fetch_array($namanya);
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
$wulan=$bulan;
$taun=$tahun;
$jmlhari=cal_days_in_month($kalender, $wulan, $taun);
$akhir=$jmlhari;
$tglawal=$tahun . '-' .$bulan. '-01';

$namanya1=mysqli_query($kon, "select * from sekolah ");
$u=mysqli_fetch_array($namanya1);
$namacetak=$f['nama'];


header("Content-type: application/vnd-ms-excel");
 

header("Content-Disposition: attachment; filename=Rekap-Absen.xls");


echo "

<style>
th{
	padding:5px 10px;
}
td{
	padding:5px 10px;
}
</style>
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
	
			$carioff=mysqli_query($kon, "select * from jadwal_kerja where id_anggota='$id' and $hari='OFF'");
			$find=mysqli_num_rows($carioff);
			$d=mysqli_fetch_array($carioff);
		
			$hariraya=mysqli_query($kon, "select * from hari_besar where tanggal='$mulai' ");
			$golek=mysqli_num_rows($hariraya);
			$hy=mysqli_fetch_array($hariraya);
			
			$hariizin=mysqli_query($kon, "select * from izin where id_anggota='$id' and tanggal='$mulai' ");
			$carikan=mysqli_num_rows($hariizin);
			$ff=mysqli_fetch_array($hariizin);
	
			
					
			
			if ($find>0){
				echo "
					<td>OFF</td><td>OFF</td><td>OFF</td><td > OFF </td></tr>";
			}else if($golek>0){
				
				echo "
					<td>HB</td><td>HB</td><td>HB</td><td > $hy[keterangan] </td></tr>";	
			}else if($carikan>0){
				
				echo "
					<td>$ff[izin]</td><td>$ff[izin]</td><td>$ff[izin]</td><td > $ff[keterangan] </td></tr>";	
			
			}else{
					$masuk=mysqli_query($kon, "select * from temp where tanggal='$mulai' and id_anggota='$id' and bayangan<='12:00:00' ");
					$s=mysqli_fetch_array($masuk);
					$teko=$s['jam'];
										
					$masuk1=mysqli_query($kon, "select * from temp where tanggal='$mulai' and id_anggota='$id' and bayangan>='12:00:00' ");
					$u=mysqli_fetch_array($masuk1);
					$mulih=$u['jam'];
				
				$kbm=mysqli_query($kon, "select * from kbm ");
				$mm=mysqli_fetch_array($kbm);
				
				if($hari=='Senin'){ $batasdatang=$mm['senin_masuk']; $bataspulang=$mm['senin_pulang'];}
				if($hari=='Selasa'){ $batasdatang=$mm['selasa_masuk']; $bataspulang=$mm['selasa_pulang'];}
				if($hari=='Rabu'){ $batasdatang=$mm['rabu_masuk']; $bataspulang=$mm['rabu_pulang'];}
				if($hari=='Kamis'){ $batasdatang=$mm['kamis_masuk']; $bataspulang=$mm['kamis_pulang'];}
				if($hari=='Jumat'){ $batasdatang=$mm['jumat_masuk']; $bataspulang=$mm['jumat_pulang'];}
				
				if($teko>$batasdatang){$warna='red'; $keterangan1='Terlambat Datang';}else{ $warna='black'; $keterangan1='';}
				if($mulih<$bataspulang){$warna2='red'; $keterangan2='Pulang lebih awal';}else{$warna2='black'; $keterangan2='';}
					
					
					if(empty($teko) and empty($mulih) ){

					$sekarang= date('Y-m-d');
							$alfa=$tahun . '-' .$bulan. '-'.$tgl;
							if (strtotime($alfa) > strtotime($sekarang)) {
						echo " <td>-</td><td>-</td><td>-</td><td>-</td>";	
						} else {	
						echo " <td>A</td><td>A</td><td>A</td><td>Tidak Masuk Tanpa Keterangan</td>";
					}
					}else if(empty($teko)){
						echo " <td>TAM</td><td style='color:$warna2'>$u[jam]</td><td>TAM</td><td>Tidak Absen Masuk $keterangan2</td>";
					}else if(empty($mulih)){
						echo " <td style='color:$warna'>$s[jam]</td><td>TAP</td><td>TAP</td><td>$keterangan1 Tidak Absen Pulang / Bolos Sekolah</td>";
					}else{
					echo " <td style='color:$warna'>$s[jam]</td><td style='color:$warna2'>$u[jam]</td><td></td><td>$keterangan1 $keterangan2</td>";
					}
				
			}
	
			
	
	
	
	
	
	echo "</tr>";
	
	$mulai++;
	$tgl++;
}
echo "</table>"

?>