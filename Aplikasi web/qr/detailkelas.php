<?php
include "koneksi.php";
 $id = $_POST['rowid'];
 
 $swq=mysqli_query($kon,"select * from kelas where kelas='$id'");
 $r=mysqli_fetch_array($swq);
  echo " 
  <form action='updatekelas.php' method='post' class='form-horizontal'>
                          
<input type='text' id='text-input' name='id_anggota'  class='form-control' value='$r[id]' hidden>
			   <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Kelas</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='kelas'  class='form-control' value='$r[kelas]'><small class='form-text text-muted'></small></div>
                          </div>

		


                     
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-save'></i> Simpan
                        </button>
					
                       </form>   
                      </div>		

 
  
";
?>