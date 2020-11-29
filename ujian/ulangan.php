<?php
include "system/koneksi.php";
$kode=$_POST['kirim'];
$spesial=substr($kode,0,1);
$mapel=substr($kode,1);
$nama=$mapel.'jawaban';
if($spesial==1){
	$tabel1='soalmtk'; 
	$tabel2='soalmtkessay';
}else if($spesial==2){
	$tabel1='soalinggris'; 
	$tabel2='soallistening';

}else if($spesial==4){
	$tabel1='soalpg'; 

}else {
	$tabel1='soal';
}


echo "
<style>
.paske1{
	margin-top:-50px;
	margin-right:30px;
}
.paske{
	margin-top:-50px;
	margin-right:160px;
}
</style><br><br><br>
 <a href='ulanganexcel.php?kirim=$_POST[kirim]'>
					  <button type='button' class='btn btn-primary btn-sm paske1' id='sembunyi'>
                          <i class='fa fa-print'></i> Cetak Excel
                        </button>
					  </a>

					  
					  
					  <br>
  </div>

			";
			

?>