<?php
include "system/koneksi.php";

$tgl=date(' d-m-Y');
echo "
 <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
<link rel='stylesheet' href='css/bootstrap.css'>
<link rel='stylesheet' href='css/kop.css'>
<link rel='stylesheet' href='css/add.css'>
<link rel='stylesheet' href='css/responsive.css'>


<link rel='stylesheet' href='css/block.css'>
  
<script src='js/jquery-3.2.1.min.js'></script>



 <script type='text/javascript' src='js/bootstrap.js'></script>
   <script type='text/javascript'>
  $(document).ready(function(){
   
  //Callback handler for form submit event
    $('#myform').submit(function(e)
    {
  
    var formObj = $(this);
    var formURL = formObj.attr('action');
    var formData = new FormData(this);
    $.ajax({
        url: formURL,
        type: 'POST',
        data:  formData,        
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function (){
                   $('#loading').show(1000).html(\"<img src='load.gif' height='100'>\"); 
					$('#sembunyi').prop('disabled', true);
					$('#popup1').css('visibility', 'visible');
                   },
       success: function(data, textStatus, jqXHR){
                $('#result').html(data);
                $('#loading').hide();
        },
            error: function(jqXHR, textStatus, errorThrown){
     }         
    });
        e.preventDefault(); //Prevent Default action.
        e.unbind();
    });    

 });
 </script>
 
 <script type='text/javascript'>
    window.history.forward();
    function noBack(){ window.history.forward(); }
</script>

<body onload=noBack() onunload=keluar()>
 
 
";

$user=$_GET['user'];
	
$mysqliuser=mysqli_query($kon, "select no_ujian, kelas, mapel_pil,jurusan, nama from peserta where no_ujian='$user'");
$e=mysqli_fetch_array($mysqliuser);	
$mysqliadmin=mysqli_query($kon, "select*from admin");
$f=mysqli_fetch_array($mysqliadmin);



$jml1=$_GET['jml'];
$noujian=$e['no_ujian'];
$kelas=$e['kelas'];
$jurusan=$e['jurusan'];
$test=$_GET['mapel'];
$wkt=$_GET['waktu'];
$tipe=$_GET['tip'];
if($tipe=='1'){
	$jml=$jml1 +5 ;	
}else if($tipe=='2'){
	$jml=$jml1+15;	

}else if($tipe=='4'){
$erte=mysqli_query($kon, "select * from soalpgessay where id_mapel='$_GET[id]'");
$v=mysqli_fetch_array($erte);

  $jml=$jml1+ $v['jumlah_soal'];    
  }else{
	$jml=$jml1;	
}



$id=$_GET['id'];
$userujian=$_GET['user'];
$nama=$e['nama'];

include "kop.php";

echo "

<div class='list'></div>

<div class='container'>

	<div class='col col-sm-7 float-left'> 
			<div class='card'>
			
				<div class='card-header'> <strong>Komfirmasi Test </strong></div>
				<div class='card-body'>
				<div class='col-sm-12 garis'> <b>Nama Test</b> <br> $test</div>
				<div class='col-sm-12 garis'> <b>Nama Peserta</b> <br> $e[nama]</div>
				<div class='col-sm-12 garis'> <b>Kelas</b> <br> $e[kelas] $jurusan </div>
				<div class='col-sm-12 garis'> <b>Tanggal Test</b> <br> $tgl </div>
				<div class='col-sm-12 garis'> <b>Waktu</b> <br> $wkt Menit </div>
				<div class='col-sm-12 garis'> <b>Jumlah Soal</b> <br> $jml</div>
				</div>
				</div>
	</div>

	<div class='col col-sm-5 float-right'> ";
	
	$sqlujian=mysqli_query($kon, "select * from selesai where no_ujian='$userujian' and id_mapel='$id' and status='1' ");
$ketemu=mysqli_num_rows($sqlujian);
$e=mysqli_fetch_array($sqlujian); 
if($ketemu>0){
	
	echo "
			<div class='card'>
			
				<div class='card-body warna'> 
				Anda sudah menyelesaikan Test mapel $test <br> Anda Tidak Bisa Mengikuti Test Ini Lagi
				</div>	
				
			</div>
			<div class='sekat'></div>
			 <div class='card'> 
                        <button class='btn-block btn-secondary btn-sm' disabled>
                          <i class='fa fa-dot-circle-o'></i> Mulai
                        </button>
             </div>
			 ";
}else{
$sqlcek=mysqli_query($kon, "select * from status where user='$userujian' and id_mapel='$id' and status='1' "); 

$ketemu1=mysqli_num_rows($sqlcek);
$e=mysqli_fetch_array($sqlcek); 
if($ketemu1>0){
	
echo "
			<div class='card'>
			
				<div class='card-body warna'> 
				Status Anda Sedang Mengikuti Test untuk mapel $test Silahkan Hubungi proktor untuk reset status
				</div>	
				
			</div>
			<div class='sekat'></div>
			 <div class='card'> 
                       <button class='btn-block btn-secondary btn-sm' disabled>
                          <i class='fa fa-dot-circle-o'></i> Mulai
                        </button>
             </div>
			 ";	
	
}else{

$sqlcek1=mysqli_query($kon, "select * from status where user='$userujian' and id_mapel='$id' and status='0' "); 

$ketemu2=mysqli_num_rows($sqlcek1);
$e=mysqli_fetch_array($sqlcek1); 
if($ketemu2>0){	
	
	echo "
			<div class='card'>
			
				<div class='card-body warna'> 
				Data Test Anda Sudah di reset <br>silahkan melanjutkan Test Kembali dengan Klik Tombol Mulai
				</div>	
				
			</div>
			<div class='sekat'></div> ";
			if($tipe=='1'){
			 echo "
			  <form method='POST' id='myform' action='ujianmat1.php'> ";
			}else if($tipe=='2'){
				echo "
				 <form method='POST' id='myform' action='ujianinggris1.php'> ";
			}else if($tipe=='4'){
				echo "
				 <form method='POST' id='myform' action='ujianpas1.php'> ";
			}else{
				echo "
			 <form method='POST' id='myform' action='ujian1.php'> ";
			}
			echo "
			 
			 
			 <input type='text' name='id' value='$id' hidden>
			 <input type='text' name='jum' value='$jml' hidden>
			 <input type='text' name='wkt' value='$wkt' hidden>
			 <input type='text' name='user' value='$userujian' hidden>
			  
			 
                        <button type='submit' class='btn-block btn-danger btn-sm' id='sembunyi'>
                          <i class='fa fa-dot-circle-o'></i> Mulai
                        </button>
			</form>
			<div id='popup1'></div> 
		
<center><div id='loading'></div></center><br>
<div id='result'></div>	
            
			 ";	
	
}else{
	echo "
			<div class='card'>
			
				<div class='card-body warna'> 
				Klik Tombol Mulai Jika Anda Sudah Yakin Akan Mengerjakan <br> Awali Ujian Dengan Doa Sebelum Anda Klik Mulai
				</div>	
				
			</div>
			<div class='sekat'></div> ";
			if($tipe=='1'){
			 echo "
			  <form method='POST' id='myform' action='ujianmat.php'> ";
			}else if($tipe=='2'){
				echo "
				 <form method='POST' id='myform' action='ujianinggris.php'> ";
			}else if($tipe=='4'){
				echo "
				 <form method='POST' id='myform' action='ujianpas.php'> ";
			}else{
				echo " 
			 <form method='POST' id='myform' action='ujian.php'> ";
			}
			echo "
			 
			 <input type='text' name='id' value='$id' hidden>
			 <input type='text' name='jum' value='$jml' hidden>
			 <input type='text' name='wkt' value='$wkt' hidden>
			 <input type='text' name='user' value='$userujian' hidden>
			 <input type='text' name='no' value='1' hidden>
			 
			
                        <button type='submit' class='btn-block btn-danger btn-sm' id='sembunyi'>
                          <i class='fa fa-dot-circle-o'></i> Mulai
                        </button>
			</form>
			
		<div id='popup1'></div>
		
<center><div id='loading'></div></center><br>
<div id='result'></div>			
			
			
             
			 ";	
			 
}
 }
 }	
	
	
	
	
echo "
	</div>
</div> 
				";



?>