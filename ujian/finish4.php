<?php

include "system/koneksi.php";
$user=$_GET['id'];
$mapel=$_GET['mapel'];
$nama=$mapel.'jawaban';

session_start();
unset($_SESSION[$_GET['id']]);
session_destroy();
echo "
 <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
<link rel='stylesheet' href='css/bootstrap.css'>


<link rel='stylesheet' href='css/kop.css'>
<link rel='stylesheet' href='css/add.css'>
<link rel='stylesheet' href='css/responsive.css'> ";
$user=$_GET['id'];
	
$mysqliuser=mysqli_query($kon, "select*from peserta where no_ujian='$user'");
$e=mysqli_fetch_array($mysqliuser);	
$mysqliadmin=mysqli_query($kon, "select*from admin");
$f=mysqli_fetch_array($mysqliadmin);

$noujian=$e['no_ujian'];
$kelas=$e['kelas'];

include "kop.php";


echo "
<div class='list'></div> ";


	

	echo "


<div class='container'>
	<div class='col col-sm-9 tengah'> 
			<div class='card'>
			
				<div class='card-header'> <strong>Ujian Telah Selesai </strong></div>
				<div class='card-body'>
			
				<div class='col-sm-12 garis'> <b>Nama Peserta</b> <br> $e[nama]</div>
				<div class='col-sm-12 garis'> <b>Kelas</b> <br> $e[kelas] </div>
				<div class='col-sm-12 garis'> <b>Mata Ujian </b> <br>
				
				";

$sqlujian=mysqli_query($kon, "select * from ujian where kelas='$kelas' and aktif='1' and id_mapel='$_GET[mapel]' "); 

$ketemu=mysqli_num_rows($sqlujian);
$k=mysqli_fetch_array($sqlujian);

	 $jadwal=$k['mapel'];
 
 echo "
$jadwal

</div>";



$sqlhasil=mysqli_query($kon, "select * from selesai where no_ujian='$user' and id_mapel='$mapel'");
$h=mysqli_fetch_array($sqlhasil);

$wicka=mysqli_query($kon, "select * from soalpgessay where id_mapel='$_GET[mapel]'");
$wk=mysqli_fetch_array($wicka);

	
			$mapel=mysqli_query($kon, "select*from ujian where id_mapel='$h[id_mapel]'");
			$s=mysqli_fetch_array($mapel);
			
			$hitung=mysqli_query($kon, "select count($nama.nilai) as jml from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='1'");
			$c=mysqli_fetch_array($hitung);
			$betul=$c['jml'];
			$hitung34=mysqli_query($kon, "select count($nama.nilai) as jmlsalah from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='0'");
			$cde=mysqli_fetch_array($hitung34);
			
			$hitung341=mysqli_query($kon, "select * from ujian WHERE id_mapel='$h[id_mapel]'");
			$cde1=mysqli_fetch_array($hitung341);

			$total=$cde1['jumlah_soal'];
			$salah=$cde['jmlsalah'] - $wk['jumlah_soal'];
			$nilaiakhir=($betul/$total)*100;
		
			/*
			echo "
			<div class='col-sm-12 garis'> <b>Nilai Anda</b> <br> ".round($nilaiakhir,2)."</div>
			
*/
			echo "

<div class='col-sm-12 garis'> <b>Nilai Anda</b> <br>
Jumlah betul = $betul , jumlah salah = $salah 
</div>








<div class='col-sm-12'> <a href='lari.php'> <button type='submit' class='btn btn-success btn-sm float-right bawah'>
                          <i class='fa fa-sign-out'></i> Keluar
                        </button></a></div>
			
 </div>

				
				</div>
			
	
		</form>
			</div>
	</div>



</div>
	
	
	
	
	
	
	
	
	
	
	



<script src='js/jquery-3.2.1.min.js'></script>
<script src='js/main.js'></script>
<script src='js/plugins.js'></script>




";
?>
