<?php
include "../system/koneksi.php";

date_default_timezone_set('Asia/Jakarta');
$jam_menit=date("H:i");
 $arr = explode(":", $jam_menit);
 $waktunya=$arr[0] * 60 + $arr[1];

$user=$_GET['user'];
$password=$_GET['pass'];
$login=mysqli_query($kon, "select * from peserta where username='$user' and password='$password'");
$e=mysqli_fetch_array($login);

$hitung=mysqli_query($kon, "select count(hadir.nis) as jml from hadir WHERE nis='$e[nis]'");
			$f=mysqli_fetch_array($hitung);
echo "

   <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Absen Ekstra Komputer</title>
    <meta name='description' content='Eko TImo - Wadah-Edukasi'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>


    <link rel='stylesheet' href='../css/normalize.css'>
    <link rel='stylesheet' href='../css/bootstrap.css'>
    <link rel='stylesheet' href='../css/font-awesome.min.css'>
	 <link rel='stylesheet' href='../style.css'>
	 
	
	
			<div class='col-lg-12'>
			 <div class='card'>
                      <div class='card-header'>
                        <strong>Presensi Kehadiran <font color='#CB1316'></font></strong>
                      </div>
					  <div class='card-body card-block'>
					  
				
	
<div class='foto5'>
	<center><img src='../peserta/$e[nis].JPG' width='250px'></center>
	</div>
	</div>


		
		
	<div class='card'>
		<div class='card-header'><strong>Data Detail Kehadiran </strong>  </div>       
					  <div class='card-body card-block'>
						
	<table class='table table-striped'>
<tr align='center'><th>No.</th><th>Hari</th><th>Tanggal</th><th>Jam</th></tr>

";
$sql2=mysqli_query($kon, "select * from hadir where nis='$e[nis]' ");
$no=1;
while ($d=mysqli_fetch_array($sql2)){
	echo "
	<tr align='center'><td>$no</td><td>$d[hari]</td><td>$d[tanggal]</td><td>$d[jam]</td></tr>	
	
	";
$no++;	
}
echo " </table> 
	
					</div>
	
	</div>
	</div>
					  
					  
				
		
	
								 
								 
	
		




</div>
 
   ";

?>