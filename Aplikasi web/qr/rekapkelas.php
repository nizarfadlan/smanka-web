<?php
include "koneksi.php";
include "tanggalbaru.php";
$kelas=$_POST['kelas'];
$tahun=$_POST['tahun'];
$bulan=$_POST['bulan'];

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
$akhir2=$jmlhari;
$tglawal=$tahun . '-' .$bulan. '-01';
$tglawal2=$tahun . '-' .$bulan. '-01';


header("Content-type: application/vnd-ms-excel");
 

header("Content-Disposition: attachment; filename=Rekap-Kelas.xls");


echo "

<style>
th{
	padding:5px 10px;
}
td{
	padding:5px 10px;
}
</style>

<strong>Rekap Absen Kelas $kelas Bulan $bulannya Tahun $tahun </strong>
<table cellspacing='0' cellpadding='0' border='1'>
 <tr><th>No</th><th>Nama</th>";
$tgl=1;
$mulai=$tglawal;
 for ($i=1 ; $i<=$akhir ; $i++ ){
	 $hari2=hari($mulai);
echo"	
	<th align='center'>$tgl<br>$hari2</th>";
	$mulai++;
	$tgl++;
}
echo " </tr>";
$no=1;
$nama=mysqli_query($kon,"select * from anggota where kelas='$kelas' ");
while($e=mysqli_fetch_array($nama)){	
echo "
<tr><td>$no</td><td>$e[nama]</td>";
								$tgl2=1;
								$mulai2=$tglawal2;
								for ($j=1 ; $j<=$akhir2 ; $j++ ){
									$hari=hari($mulai2);
								
						
										$carioff=mysqli_query($kon,"select * from jadwal_kerja where id_anggota='$e[id_anggota]' and $hari='OFF'");
												$find=mysqli_num_rows($carioff);
												$d=mysqli_fetch_array($carioff);  
		
												$hariraya=mysqli_query($kon,"select * from hari_besar where tanggal='$mulai2' ");
												$golek=mysqli_num_rows($hariraya);
												$hy=mysqli_fetch_array($hariraya);
			
												$hariizin=mysqli_query($kon,"select * from izin where id_anggota='$e[id_anggota]' and tanggal='$mulai2' ");
												$carikan=mysqli_num_rows($hariizin);
												$ff=mysqli_fetch_array($hariizin);
	
											
												
											
															if ($find>0){
															echo "
															<td>OFF</td>";
															}else if($golek>0){
				
															echo "
															<td>HB</td>";	
															}else if($carikan>0){
				
															echo "
															<td>$ff[izin]</td>";	
														
															}else{
															$masuk=mysqli_query($kon,"select * from temp where tanggal='$mulai2' and id_anggota='$e[id_anggota]' and bayangan<='12:00:00' ");
															$s=mysqli_fetch_array($masuk);
															$teko=$s['jam'];
										
															$masuk1=mysqli_query($kon,"select * from temp where tanggal='$mulai2' and id_anggota='$e[id_anggota]' and bayangan>='12:00:00' ");
															$u=mysqli_fetch_array($masuk1);
															$mulih=$u['jam'];
				
															$kbm=mysqli_query($kon,"select * from kbm ");
															$mm=mysqli_fetch_array($kbm);
				
															if($hari=='Senin'){ $batasdatang=$mm['senin_masuk']; $bataspulang=$mm['senin_pulang'];}
															if($hari=='Selasa'){ $batasdatang=$mm['selasa_masuk']; $bataspulang=$mm['selasa_pulang'];}
															if($hari=='Rabu'){ $batasdatang=$mm['rabu_masuk']; $bataspulang=$mm['rabu_pulang'];}
															if($hari=='Kamis'){ $batasdatang=$mm['kamis_masuk']; $bataspulang=$mm['kamis_pulang'];}
															if($hari=='Jumat'){ $batasdatang=$mm['jumat_masuk']; $bataspulang=$mm['jumat_pulang'];}
				
															if($teko>$batasdatang){$warna='red'; $keterangan1='Terlambat Datang';}else{ $warna='black'; $keterangan1='';}
															if($mulih<$bataspulang){$warna2='red'; $keterangan2='Pulang lebih awal';}else{$warna2='black'; $keterangan2='';}
					
					
															if(empty($teko) and empty($mulih) ){
															echo " <td style='color:red'>A</td>";
															}else if(empty($teko)){
															echo " <td><div style='color:red'>TAM </div><br><div style='color:$warna2'> $u[jam]</div></td>";
															}else if(empty($mulih)){
															echo " <td><div style='color:$warna'>$s[jam] </div><br><div style='color:red'>TAP</div></td>";
															}else{
															echo " <td><div style='color:$warna'>$s[jam]</div><br><div style='color:$warna2'>$u[jam]</div></td>";
															}
				
			}
								
								
								
								
								
								
								$mulai2++;
								$tgl2++;
								}

$no++;
}

	

?>