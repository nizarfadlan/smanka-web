<?php

session_start();

if(isset($_SESSION['user'])){
	$telah_berlalu = time() - $_SESSION['user'];
	}
else {
	$_SESSION['user'] = time();
	$telah_berlalu = 0;
	}	


	
include "system/koneksi.php";

$nouser=$_GET['user'];
$tgl=date('d-m-Y');
$timerr=$_GET['dtk'];
$idmapel=$_GET['id'];
$nomer=$_GET['no'];
$jumlah=$_GET['jml'];

$waktunya=$timerr;	
$waktu=$waktunya - $telah_berlalu;	
	$ekojam = floor($waktu/3600);
    $sisa = $waktu%3600;
    $ekomenit = floor($sisa/60);
    $sisa2 = $sisa%60;
    $ekodetik = $sisa2%60;	
	
$user=$_GET['id'];
$mysqliuser=mysqli_query($kon, "select * from peserta where no_ujian='$nouser'");
$e=mysqli_fetch_array($mysqliuser);	
$mysqliadmin=mysqli_query($kon, "select * from admin");
$f=mysqli_fetch_array($mysqliadmin);



echo " 
<link rel='stylesheet' href='css/animate.css'>
<link rel='stylesheet' href='css/bootstrap.css'>

<link rel='stylesheet' href='css/font-awesome.min.css'>
<link rel='stylesheet' href='css/kop.css'>
<link rel='stylesheet' href='css/add.css'>
<link rel='stylesheet' href='css/responsive.css'>
<script src='js/jquery-3.2.1.min.js'></script>

<script type='text/javascript'>
    window.history.forward();
    function noBack(){ window.history.forward(); }
</script>

<script type='text/javascript'>
function tombol()
{
document.getElementById('tombol').innerHTML= '<input type=button value=Simpan onclick=selesai()>;
}
</script>

<body onload=init() onunload=keluar()>
<p>

<div class='animated fadeIn'>";
include "kop1.php";
echo "

<div class='batas1'></div>
<div class='soal'>
<div class='soalatas'> SOAL NO : <div class='angka'><b>$nomer</b> </div> </div>
<div class='soalatas2 float-right'><div class='sisa'>Sisa Waktu :</div><div class='timerku'> <div id='h_timer'> </div> </div> </div>
";
$sw=mysqli_query($kon, "select mapel from ujian where id_mapel='$idmapel'");
$r=mysqli_fetch_array($sw);
echo"
<div class='list23'> <div class='nosoal'><span style='font-size:14px;display:block;cursor:pointer' onclick='openNav()'>Daftar<br>Soal</span></div>
";if($nomer==$jumlah){ echo"

<div class='finish'>


<button type='button' class='btn btn-danger btn-sm' onclick='myFunction()'>
                          <i class='fa fa-exclamation-triangle'></i> Selesai 
</button>
</div>";
}
 echo " </div>
<div class='kontensoal'> ";

include "bagi.php";
echo "
<div class='ksoal'>

	 $soal <br>  
$telah_berlalu dan $_SESSION[user]
<div class='jawaban'>
<form action='selesai.php' name='form_cek' id='form_cek'>


<table border='0' cellpadding='0px' cellspacing='0px' >
<input type='text' name='user' value='$nouser' hidden=''>
<input type='text' name='mapel' value='$idmapel' hidden=''>
<input type='text' name='no' value='$urt' hidden=''>
<input type='text' name='jml' value='$jumlah' hidden=''>
<div id='mySidenav' class='sidenav'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
<div class='menusamping'>
 ";

for($hal=1; $hal<=$jumlah; $hal++){
	$sql212=mysqli_query($kon, "select * from jawaban where id_mapel='$idmapel' and user='$nouser' and urutan='$hal'");
	$q=mysqli_fetch_array($sql212);
	if(empty($q['jawab'])){$warna='';}else{$warna='hijau';}
	if($q['ragu']==1){$warna1='kuning';}else{$warna1='';}
	if($hal==$nomer){$cek="checked";} else {$cek="";}
	

	echo" 
	<li><input type='radio' id='$hal' name='nomer' value='$hal' onclick=\"document.form_cek.action = 'acak.php'; document.form_cek.method='get'; document.form_cek.submit(); return false;\" $cek>
       <label for='$hal' class='angka2 $warna $warna1'>$hal</label></li>
	
	
	";
}



echo "
</div>


</div>


<script>
function openNav() {
    document.getElementById('mySidenav').style.width = '230px';
}

function closeNav() {
    document.getElementById('mySidenav').style.width = '0';
}
</script>

		<tr><td width='50px'><input type='radio' id='A' name='pil' value='$muncul[j1]' $nilaiA>
       <label for='A' class='A'>&nbsp;</label></td><td>$jwba</td></tr>
	
   <tr><td width='50px'> <input type='radio' id='B' name='pil' value='$muncul[j2]' $nilaiB>
       <label for='B' class='B'>&nbsp;</label></td><td>$jwbb</td></tr>

	    <tr><td width='50px'><input type='radio' id='C' name='pil' value='$muncul[j3]' $nilaiC>
       <label for='C' class='C'>&nbsp;</label> </td><td>$jwbc</td></tr>
		
	  	<tr><td width='50px'>   <input type='radio' id='D' name='pil' value='$muncul[j4]' $nilaiD>
       <label for='D' class='D'>&nbsp;</label></td><td>$jwbd</td></tr>
	   
	   <tr><td width='50px'>   <input type='radio' id='E' name='pil' value='$muncul[j5]' $nilaiE>
       <label for='E' class='E'>&nbsp;</label></td><td>$jwbe</td></tr>
	   
	   
 
  
        </table>
		
</div>
</div>



<div class='menuu'> ";

if($nomer==1){
	
	echo"
<div class='back'>

</div>";
}else{
	echo "
<div class='back'>
<a href='' onclick=\"document.form_cek.action = 'back.php'; document.form_cek.method='get'; document.form_cek.submit(); return false;\">
<button type='button' class='btn btn-primary btn-sm'>
                          <i class='fa fa-arrow-circle-left'></i> Sebelumnya
</button>
</a>
</div>";
}

if($nomer==$jumlah){
	echo " <div class='next'>

</div>
";

}else{
echo "
<div class='next' id='space'>
<a href='' onclick=\"document.form_cek.action = 'simpan.php'; document.form_cek.method='get'; document.form_cek.submit(); return false;\">
<button type='button' class='btn btn-primary btn-sm'>
                           Selanjutnya <i class='fa fa-arrow-circle-right'></i>
</button>
</a>
</div> ";
}


echo "
<div class='raguragu'>
<input type='checkbox' id='ragu' name='ragu' value='1' $nilairagu>
       <label for='ragu' class='ragu'>Ragu</label>

</div>


</form>


</div>
</div>



</div>
</div>




<script>
$(document).keydown(function(e) { 
	  var soale = $('#soale').val();  
	  var urlString = 'url(images/pilih.png)';
	  

      if (e.which == 65) {
		var tekan = 'A';
		document.getElementById('A').checked = true;	
	  } 
	  else if (e.which == 66) {
		var tekan = 'B';		
		document.getElementById('B').checked = true;
	  }
	  else if (e.which == 67) {
		var tekan = 'C';		  
		document.getElementById('C').checked = true;		
	  }
	  else if (e.which == 68) {
		var tekan = 'D';		  
		document.getElementById('D').checked = true;		
	  }
	  else if (e.which == 69) {
		var tekan = 'E';		  
		document.getElementById('E').checked = true;		
	  }
	
		
		
});

</script> 






<script type='text/javascript'>
function myFunction(){
	var txt;
	var r=confirm('Yakin ingin selesai Test?');
	if(r==true){
		document.getElementById('form_cek').submit();
		
	}else{
		
	}
}
</script>
";
include "waktu.php";

?>