<?php
include "koneksi.php";
 $id = $_POST['rowid'];
 
 $swq=mysqli_query($kon, "select * from anggota where id_anggota='$id'");
 $r=mysqli_fetch_array($swq);
  echo " 
  <form action='hapus.php' method='post' class='form-horizontal'>
  <div class='card'>
     <div class='card-body'>                     
<input type='text' id='text-input' name='id_anggota'  class='form-control' value='$r[id_anggota]' hidden>
			   <div class='row form-group'>
                            <div class='col col-md-12'><label for='text-input' class=' form-control-label'>Anda Yakin Akan Menghapus Data $r[nama]</label></div>
                            
                     
</div>		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-times'></i> Hapus
                        </button>
						<a href='home.php?state=daftar'>
					 <button type='button' class='btn btn-primary btn-sm'><i class='fa fa-sign-out'></i> Batal
                        </button></a>
	</div>				
                       </form>   
                      </div>		

 
  
";
?>