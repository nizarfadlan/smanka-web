<?php

include "system/koneksi.php";


$idmapel=$_GET['mapel'];
$nomer=$_GET['no'];
$alamat=$_GET['alamat'];

$mysqliadmin=mysqli_query($kon, "select * from admin");
$f=mysqli_fetch_array($mysqliadmin);



echo " 
<link rel='stylesheet' href='css/add.css'>
<link rel='stylesheet' href='css/animate.css'>
<link rel='stylesheet' href='css/bootstrap.css'>
<link rel='stylesheet' href='css/kop.css'>
<link rel='stylesheet' href='css/responsive.css'>
<script src='js/jquery-3.2.1.min.js'></script>
<script src='js/jquery.plugin.min.js'></script>
<script src='js/jquery.countdown.js'></script>
<div class='animated fadeIn'>
";
include "kop1.php";
$sw=mysqli_query($kon, "select mapel from ujian where id_mapel='$idmapel'");
$r=mysqli_fetch_array($sw);
echo "

<div class='batas'></div>
<div class='soal'>
<div class='soalatas'> SOAL NO : <div class='angka'><b>$nomer</b> </div> &nbsp &nbsp $r[mapel] </div>

 <div class='list23'></div>
<div class='kontensoal'> ";

include "bagi2.php";
echo "
<div class='ksoal'>

	 $soal <br>  
	 
<div class='jawaban'>
<form action='selesai.php' name='form_cek' id='form_cek'>


<table border='0' cellpadding='0px' cellspacing='0px' >

<input type='text' name='mapel' value='$idmapel' hidden=''>



</div>

";
if($alamat=='soalmtkessay' or $alamat=='soalpgessay'){
}else{
	echo "

		<tr><td><input type='radio' id='A' name='pil'>
       <label for='A' class='A'>&nbsp;</label></td><td>&nbsp;&nbsp;&nbsp; $jwba</td></tr>
	
   <tr><td> <input type='radio' id='B' name='pil' >
       <label for='B' class='B'>&nbsp;</label></td><td>&nbsp;&nbsp;&nbsp; $jwbb</td></tr>

	    <tr><td><input type='radio' id='C' name='pil' >
       <label for='C' class='C'>&nbsp;</label> </td><td>&nbsp;&nbsp;&nbsp; $jwbc</td></tr>
		
	  	<tr><td>   <input type='radio' id='D' name='pil' >
       <label for='D' class='D'>&nbsp;</label></td><td>&nbsp;&nbsp;&nbsp; $jwbd</td></tr>
	   
	   <tr><td>   <input type='radio' id='E' name='pil' >
       <label for='E' class='E'>&nbsp;</label></td><td>&nbsp;&nbsp;&nbsp; $jwbe</td></tr>
	   
	  ";
}
echo "	  
 
  
        </table>
</div>
</div>



<div class='menuu'> 
<a href='admin.php?bagian=edit'>
<button type='button' class='btn btn-primary btn-sm' onclick='myFunction()'>
                          <i class='fa fa-reply'></i> Kembali
</button>
</a>
</div>


</form>


</div>
</div>



</div>
</div>

";


?>