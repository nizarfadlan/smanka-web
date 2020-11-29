<?php
include "koneksi.php";

 $nisnya = $_GET['id'];
 
 $swq=mysqli_query($kon, "select nis, id_anggota from anggota where nis='$nisnya'");
 $r=mysqli_fetch_array($swq);
echo"
   <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/font-awesome.min.css'>
  <form action='#' method='post' class='form-horizontal'>

 <div class='container'>                         
<input type='text' id='text-input' name='id_anggota'  class='form-control' value='$r[id_anggota]' hidden>
			  

	<div class='col-sm-6'>		 
			<div class='row form-group'>
                           <label>Bulan</label>
 <div class='col-md-2'>
							<select name='bulan' id='select' class='form-control' required>
                                <option value=''>Pilih</option>
                                <option value='01'>Januari</option>
                                <option value='02'>Februari</option>
                                <option value='03'>Maret</option>
								<option value='04'>April</option>
                                <option value='05'>Mei</option>
                                <option value='06'>Juni</option>
								<option value='07'>Juli</option>
                                <option value='08'>Agustus</option>
                                <option value='09'>September</option>
								<option value='10'>Oktober</option>
                                <option value='11'>November</option>
                                <option value='12'>Desember</option>
                              </select>
</div>
                   
                          <label >Tahun</label>
  <div class='col-md-2'>
 <select name='tahun' id='select' class='form-control' required>
                                <option value=''>Pilih</option>
                                <option value='2019'>2019</option>
                                <option value='2020'>2020</option>
								<option value='2021'>2021</option>
                                <option value='2022'>2022</option>
                                <option value='2023'>2023</option>
								<option value='2024'>2024</option>
                                <option value='2025'>2025</option>
                           
								
                              </select>
</div>
<div class='card-block'><br>
                    <div class='col-md-2 form-group'>   
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-desktop'></i> Tampilkan
                        </button>
					
                       </form>   </div>
        </div>		
</div>
 </div>";
 
    if(isset($_POST['id_anggota'])){   
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 include "tanggalbaru.php";
$idnya=$_POST['id_anggota'];
$tahun=$_POST['tahun'];
$bulan=$_POST['bulan'];
$namanya=mysqli_query($kon, "select nama, nis, id_anggota from anggota where id_anggota='$idnya' ");
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

$wulan=$bulan;
$taun=$tahun;
$jmlhari=date('t', mktime(0,0,0, $wulan,1, $taun));

$akhir=$jmlhari;
$tglawal=$tahun . '-' .$bulan. '-01';




echo "

<style>
th{
	padding:2px 1px;
	font-size:14.5px;
text-align:center;
}
td{
	padding:1px;
	font-size:14.5px;

}
</style>
Rekap Personal $f[nama] Bulan $bulannya Tahun $tahun 
<div class='table-responsive'>
<table class='table-striped table-bordered '>
<tr><th>Tanggal</th><th>Jam Masuk</th><th>Jam Pulang</th><th width='400px'>keterangan</th></tr>";
$tgl=01;
$mulai=$tglawal;
 for ($i=1 ; $i<=$akhir ; $i++ ){
	$lengkap=tgl_ind($mulai);
	$hari=hari($mulai);
	
	if($hari=='Minggu'){$hari1='Ming';}
	if($hari=='Senin'){$hari1='Sen';}
	if($hari=='Selasa'){$hari1='Sel';}
	if($hari=='Rabu'){$hari1='Rab';}
	if($hari=='Kamis'){$hari1='Kam';}
	if($hari=='Jumat'){$hari1='Jum';}
	if($hari=='Sabtu'){$hari1='Sab';}
	
	echo " 
	<tr><td>$hari1 $tgl</td>";
	
			$carioff=mysqli_query($kon, "select id_anggota, senin, selasa, rabu, kamis, jumat, sabtu, minggu from jadwal_kerja where id_anggota='$idnya' and $hari='OFF'");
			$find=mysqli_num_rows($carioff);
			$d=mysqli_fetch_array($carioff);
		
			$hariraya=mysqli_query($kon, "select * from hari_besar where tanggal='$mulai' ");
			$golek=mysqli_num_rows($hariraya);
			$hy=mysqli_fetch_array($hariraya);
			
			$hariizin=mysqli_query($kon, "select id_anggota, tanggal, izin, keterangan from izin where id_anggota='$idnya' and tanggal='$mulai' ");
			$carikan=mysqli_num_rows($hariizin);
			$ff=mysqli_fetch_array($hariizin);
	
								
			
			if ($find>0){
				echo "
					<td>OFF</td><td>OFF</td><td > OFF </td></tr>";
			}else if($golek>0){
				
				echo "
					<td>HB</td><td>HB</td><td > $hy[keterangan] </td></tr>";	
			}else if($carikan>0){
				
				echo "
					<td>$ff[izin]</td><td>$ff[izin]</td><td > $ff[keterangan] </td></tr>";	
			
			}else{
					$masuk=mysqli_query($kon, "select id_anggota, tanggal, jam, bayangan from temp where tanggal='$mulai' and id_anggota='$idnya' and bayangan<='12:00:00' order by bayangan ASC");
					$s=mysqli_fetch_array($masuk);
					$teko=$s['jam'];
										
					$masuk1=mysqli_query($kon, "select id_anggota, tanggal, jam, bayangan from temp where tanggal='$mulai' and id_anggota='$idnya' and bayangan>='12:00:01' order by bayangan DESC");
					$u=mysqli_fetch_array($masuk1);
					$mulih=$u['jam'];
				
				$kbm=mysqli_query($kon, "select * from kbm ");
				$mm=mysqli_fetch_array($kbm);
				
				if($hari=='Senin'){ $batasdatang=$mm['senin_masuk']; $bataspulang=$mm['senin_pulang'];}
				if($hari=='Selasa'){ $batasdatang=$mm['selasa_masuk']; $bataspulang=$mm['selasa_pulang'];}
				if($hari=='Rabu'){ $batasdatang=$mm['rabu_masuk']; $bataspulang=$mm['rabu_pulang'];}
				if($hari=='Kamis'){ $batasdatang=$mm['kamis_masuk']; $bataspulang=$mm['kamis_pulang'];}
				if($hari=='Jumat'){ $batasdatang=$mm['jumat_masuk']; $bataspulang=$mm['jumat_pulang'];}
				if($hari=='Sabtu'){ $batasdatang=$mm['sabtu_masuk']; $bataspulang=$mm['sabtu_pulang'];}
				if($hari=='Minggu'){ $batasdatang=$mm['minggu_masuk']; $bataspulang=$mm['minggu_pulang'];}
				if($teko>$batasdatang){$warna='orange'; $keterangan1='Terlambat Datang';}else{ $warna='black'; $keterangan1='';}
				if($mulih<$bataspulang){$warna2='orange'; $keterangan2='Pulang lebih awal';}else{$warna2='black'; $keterangan2='';}
					
					
					if(empty($teko) and empty($mulih) ){
						
						
							$sekarang= date('Y-m-d');
							$alfa=$tahun . '-' .$bulan. '-'.$tgl;
							if (strtotime($alfa) > strtotime($sekarang)) {
						echo " <td>-</td><td>-</td><td>-</td>";	
						} else {
						echo " <td style='color:red'>A</td><td style='color:red'>A</td><td style='color:red'>Tidak Masuk Tanpa Keterangan</td>";
						}
					}else if(empty($teko)){
						echo " <td>TAM</td><td style='color:$warna2'>$u[jam]</td><td>Tidak Absen Masuk $keterangan2</td>";
					}else if(empty($mulih)){
						echo " <td style='color:$warna'>$s[jam]</td><td style='color:red'>TAP</td><td>$keterangan1 Tidak Absen Pulang / Bolos Sekolah</td>";
					}else{
					echo " <td style='color:$warna'>$s[jam]</td><td style='color:$warna2'>$u[jam]</td><td>$keterangan1 $keterangan2</td>";
					}
				
			}
	
			
	
	
	
	
	
	echo "</tr>";
	
	$mulai++;
	$tgl++;
}
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
	}
	
	echo "
 
 </table></div>
 
 
 
 
 
 
 
 </div> 
";
?>