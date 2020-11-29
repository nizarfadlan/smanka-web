<?php
include "koneksi.php";
 $id = $_POST['rowid'];
 
 $swq=mysqli_query($kon, "select * from izin where urutan='$id'");
 $r=mysqli_fetch_array($swq);
  echo " 
  <form action='hapusizin3.php' method='post' class='form-horizontal'>
  <div class='card'>
     <div class='card-body'>                     
<input type='text' id='text-input' name='id_anggota'  class='form-control' value='$r[urutan]' hidden>
			   <div class='row form-group'>
                            <div class='col col-md-12'><label for='text-input' class=' form-control-label'>Anda Yakin Akan Menghapus Data Izin  atas nama $r[nama] dengan izin $r[keterangan]</label></div>
                            
                     
</div>		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-times'></i> Hapus
                        </button>
						<a href='rekapizin.php'>
					 <button type='button' class='btn btn-primary btn-sm'><i class='fa fa-sign-out'></i> Batal
                        </button></a>
	</div>				
                       </form>   
                      </div>		

 
  
";
?>