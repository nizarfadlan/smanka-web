<?php

include "system/koneksi.php";



echo "
 <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
<link rel='stylesheet' href='css/bootstrap.css'>
<link rel='stylesheet' href='css/kop.css'>
<link rel='stylesheet' href='css/add.css'>
<link rel='stylesheet' href='css/responsive.css'>
<link rel='stylesheet' type='text/css' href='css/font-awesome.min.css'>

<script src='js/jquery-3.2.1.min.js'></script>
 <script type='text/javascript'>
    window.history.forward();
    function noBack(){ window.history.forward(); }
</script>

";
$user=$_GET['id'];
	
$mysqliuser=mysqli_query($kon, "select no_ujian, kelas, mapel_pil,jurusan, nama from peserta where no_ujian='$user'");
$e=mysqli_fetch_array($mysqliuser);	
$mysqliadmin=mysqli_query($kon, "select*from admin");
$f=mysqli_fetch_array($mysqliadmin);

$noujian=$e['no_ujian'];
$kelas=$e['kelas'];
$jurusan=$e['jurusan'];
$pilihan=$e['mapel_pil'];
include "kop.php";


echo "
<div class='list'></div> ";


	

if(isset($_POST['token'])){	
	$token=$_POST['token'];

		$match=mysqli_query($kon, "select * from ijin where id_token='token123'");
		$re=mysqli_fetch_array($match);
		$kodetoken=$re['token'];
	
	if ($kodetoken <> $token){
	
	echo "
	
	 <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> &nbsp; Token yang anda masukkan salah atau sudah tidak berlaku !!!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
	
			
               
           ";
	} else {
		

	echo "
	
<script>;window.location='siap.php?&id=$_POST[id_mapel]&jml=$_POST[jml_soal]&waktu=$_POST[waktu]&user=$user&mapel=$_POST[mapel]&jur=$_POST[jurusan]&tip=$_POST[tipenya1]'</script> 

	";



	}



	}
	echo "


<div class='container'>
	<div class='col col-sm-9 tengah'> 
			<div class='card'>
			
				<div class='card-header'> <strong>Komfirmasi Data Peserta </strong></div>
				<div class='card-body'>
			
				<div class='col-sm-12 garis'> <b>Nama Peserta</b> <br> $e[nama]</div>
				<div class='col-sm-12 garis'> <b>Kelas</b> <br> $e[kelas] $e[jurusan]</div>
				<div class='col-sm-12 garis'> <b>Mata Ujian </b> <br>
			
				";
				
	$cekmapel=mysqli_query($kon, "select * from ujian where aktif='1' and spesial='1' and kelas='$kelas'");
	$mat=mysqli_num_rows($cekmapel);
	
	$cekmapel2=mysqli_query($kon, "select * from ujian where aktif='1' and spesial='2' and kelas='$kelas'");
	$ing=mysqli_num_rows($cekmapel2);
	$cekmapel3=mysqli_query($kon, "select * from ujian where aktif='1' and spesial='4' and kelas='$kelas'");
	$pg=mysqli_num_rows($cekmapel3);
$cekmapel4=mysqli_query($kon, "select * from ujian where aktif='1' and spesial='0' and kelas='$kelas'");
if($mat>0){
	$cekmapel33=mysqli_query($kon, "select * from ujian where aktif='1' and spesial='1' and jurusan='$e[jurusan]'");
	$k=mysqli_fetch_array($cekmapel33);
	
	$jadwal=$k['mapel'];
	$jur=$k['jurusan'];
	$tipenya='1';
}else if($ing>0){
	$k=mysqli_fetch_array($cekmapel2);
	$jadwal=$k['mapel'];
	$jur='';
	$tipenya='2';
}else if($pg>0){
	$k=mysqli_fetch_array($cekmapel3);
	$jadwal=$k['mapel'];
	$jur=$k['jurusan'];
	$tipenya='4';
}else{
				
				
				
				
$semuanya=mysqli_query($kon, "select * from ujian where kelas='$kelas' and jurusan='ALL' and aktif='1' "); 
$joss=mysqli_num_rows($semuanya);
$k=mysqli_fetch_array($semuanya);

if($joss>0){
	$jadwal=$k['mapel'];
	$tipenya='';
	$jur='';
}else{


$sqlujian=mysqli_query($kon, "select * from ujian where kelas='$kelas' and jurusan='$jurusan' and mapel='$pilihan' and aktif='1' "); 

$ketemu=mysqli_num_rows($sqlujian);
$k=mysqli_fetch_array($sqlujian);

 if($ketemu>0){
	 $jadwal=$k['mapel'];
	 $jur='';
	 $tipenya='';
	
 }
else {
	
	
$sqlujian5=mysqli_query($kon, "select * from ujian where kelas='$kelas' and jurusan='$jurusan' and aktif='1' "); 

$ketemu5=mysqli_num_rows($sqlujian5);
$k=mysqli_fetch_array($sqlujian5);

 if($ketemu5>0){
	 $jadwal=$k['mapel'];
	 $jur=$k['jurusan'];
	$tipenya='';
	
	
 }else{
	
	
	 $jadwal='Tidak Ada Jadwal Ujian';
	 $jur='';
	 $tipenya='';
 }
 
}
}
} 
 echo "
$jadwal

</div>

<div class='col-sm-12 garis'> <b>Token</b> <br> 
<form method='post' action='#'>
<input type='text' name='token' hidden>
<input type='text'  name='token' class='form-control lebar' required>

<input type='text' name='id_mapel' value='$k[id_mapel]' hidden>
<input type='text' name='jml_soal' value='$k[jumlah_soal]' hidden>
<input type='text' name='waktu' value='$k[waktu]' hidden>
<input type='text' name='mapel' value='$k[mapel]' hidden>
<input type='text' name='jurusan' value='$jur' hidden>
<input type='text' name='tipenya1' value='$tipenya' hidden>


</div>

";


if($jadwal=='Tidak Ada Jadwal Ujian'){ 
echo "
<div class='col-sm-12'> </div> ";
}else{
echo "
<div class='col-sm-12'>  <button type='submit' class='btn btn-success btn-sm float-right bawah'>
                          <i class='fa fa-dot-circle-o'></i> Submit
                        </button></div> ";
}
echo "

				
			
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
