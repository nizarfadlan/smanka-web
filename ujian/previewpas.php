<?php




	
include "system/koneksi.php";

$idmapel=$_GET['kirim'];
$tabel=$_GET['sp'];
$nomer=$_GET['nomer'];
$jumlah=$_GET['jml'];
$nama=$idmapel.'jawaban';
$bataspil=$_GET['batas'];



				$sqlsoal=mysqli_query($kon, "select * from soalpg where id_mapel='$idmapel'");
				$r=mysqli_fetch_array($sqlsoal);
 


$mysqliadmin=mysqli_query($kon, "select nama_sekolah, alamat, foto from admin");
$f=mysqli_fetch_array($mysqliadmin);



echo " 

<link rel='stylesheet' href='css/bootstrap.css'>

 <link rel='stylesheet' href='css/block.css'> 
<link rel='stylesheet' href='css/terbang.css'>	
<link rel='stylesheet' href='css/animate.css'>	

<link rel='stylesheet' href='css/font-awesome.min.css'>
<link rel='stylesheet' href='css/kop.css'>
<link rel='stylesheet' href='css/add.css'>
<link rel='stylesheet' href='css/responsive.css'>
<script src='js/jquery-3.2.1.min.js'></script>



<script type='text/javascript'>
function tombol()
{
document.getElementById('tombol').innerHTML= '<input type=button value=Simpan onclick=selesai()>;
}
</script>

<body onload=init() onunload=keluar()>
<p>

<div class='animated fadeIn'>";
include "kop2.php";
echo "
<div class='header' id='myHeader'>
 <div class='soalatas'> SOAL NO : <div class='angka'><b>$nomer</b> </div> </div>
<div class='soalatas2 float-right'> </div>

</div> 

<div class='soal'>
";
$sw=mysqli_query($kon, "select mapel from ujian where id_mapel='$idmapel'");
$r=mysqli_fetch_array($sw);
echo"
<div class='list23'> <div class='nosoal' style='display:block;cursor:pointer' onclick='openNav()'>Daftar<br>Soal</span></div>
";if($nomer==$jumlah){ echo"

<div class='finish'>

<a href='#popup'>
<div class='tombol' id='tambah'>
                          <i class='fa fa-exclamation-triangle'></i> Selesai </div>
</a>
</div>";
}
 echo " </div>
<div class='kontensoal'> ";

include "bagian4.php";

echo "
<div class='ksoal'>

	 $soal <br>  

<div class='jawaban'>
<form action='rampung.php' name='form_cek' id='form_cek'>


<table border='0' cellpadding='0px' cellspacing='0px' >

<input type='text' name='mapel' value='$idmapel' hidden=''>
<input type='text' name='no' value='$urt' hidden=''>
<input type='text' name='jml' value='$jumlah' hidden=''>
<input type='text' name='spesial' value='$tabel' hidden=''>
<input type='text' name='batas' value='$bataspil' hidden=''>
<div id='mySidenav' class='sidenav'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
<div class='menusamping'>
 ";

for($hal=1; $hal<=$jumlah; $hal++){
	

	echo" 
	<li><div class='bulatan'></div><input type='radio' id='$hal' name='nomer' value='$hal' onclick=\"document.form_cek.action = 'acak18.php'; document.form_cek.method='get'; document.form_cek.submit(); return false;\" >
       <label for='$hal' class='angka2 '>$hal</label> </li>
	
	
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
</script>  ";

if($nomer>$bataspil){
	
} else{
	echo"
		<tr><td width='50px'><input type='radio' id='A' name='pil'>
       <label for='A' class='A'>&nbsp;</label></td><td>$jwba</td></tr>
	
   <tr><td width='50px'> <input type='radio' id='B' name='pil' >
       <label for='B' class='B'>&nbsp;</label></td><td>$jwbb</td></tr>

	    <tr><td width='50px'><input type='radio' id='C' name='pil' ]' >
       <label for='C' class='C'>&nbsp;</label> </td><td>$jwbc</td></tr>
		
	  	<tr><td width='50px'>   <input type='radio' id='D' name='pil'>
       <label for='D' class='D'>&nbsp;</label></td><td>$jwbd</td></tr>
	   
	   <tr><td width='50px'>   <input type='radio' id='E' name='pil'>
       <label for='E' class='E'>&nbsp;</label></td><td>$jwbe</td></tr>
	   
	   
 ";
}	
echo "	
  
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
<a href='' onclick=\"document.form_cek.action = 'balik4.php'; document.form_cek.method='get'; document.form_cek.submit(); return false;\">
<div class='tombol1'>
                          <i class='fa fa-arrow-circle-left'></i> Sebelumnya
</div>
</a>
</div>";
}

if($nomer==$jumlah){
	echo " <div class='next'>

</div>
";

}else{
echo "
<div class='next'>
<a href='' onclick=\"document.form_cek.action = 'lanjut4.php'; document.form_cek.method='get'; document.form_cek.submit(); return false;\">
<div class='tombol1'>
                           Selanjutnya <i class='fa fa-arrow-circle-right'></i>
</div>
</a>
</div>  ";
}


echo "


</form>


</div>
</div>



</div>
</div>
<div class='tinggi'></div><br>



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






<div id='popup' class='gerak'>

<div class='window'>

<div class='col col-md-8'>
	<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Akhiri Test</strong>
                    </div>
                    <div class='card-body'>

                    <h4>Yakin ingin selesai Test?</h4>
  	  <div><label for='myCheckbox'><input id='myCheckbox' type='checkbox'/>&nbsp; &nbsp; Cek jika ingin selesai test</label> </div>
		   <div class='card-footer'>
	
                   <input type='button' id='myButton' disabled value='Selesai' class='btn btn-secondary btn-sm' onClick='document.getElementById(\"form_cek\").submit();' >
                       
				
						<input type='button' class='btn btn-danger btn-sm float-right' value='Batal' onClick='history.go(-1);'>
                       </form>   
                      </div>				

 
             
                   
			
			
			
	
</div>



<script>
$(document).ready(function () {
  $('#myCheckbox').click(function () {
    $('#myButton').prop('disabled', !$('#myCheckbox').prop('checked')); 
	$('.btn-secondary').css('background' ,'blue');
  })
});
</script>







<script>
$('#tambah').click(function() {
    $('.gerak').addClass('animated fadeInDown');
});

</script>
<script>
$('#tambah').click(function() {
    $('.gerak').addClass('animated fadeInDown');
});


</script>
    <script src='js/terbang.js' ></script>
	
	<script>

window.onscroll = function() {myFunction()};
var header = document.getElementById('myHeader');
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
} 
</script>
";


?>