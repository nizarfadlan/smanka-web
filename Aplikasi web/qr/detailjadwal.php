<?php
include "koneksi.php";
 $id = $_POST['rowid'];
 
 $swq=mysqli_query($kon, "select * from jadwal where id='$id'");
 $r=mysqli_fetch_array($swq);
  echo " 
  <form action='updatejadwal.php' method='post' class='form-horizontal'>
                          
<input type='text' id='text-input' name='id_anggota'  class='form-control' value='$r[id]' hidden>
			   <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Jenis</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='jenis'  class='form-control' value='$r[jenis]'><small class='form-text text-muted'></small></div>
                          </div>


			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Jam Masuk</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='masuk' class='form-control' value='$r[jam_masuk]'><small class='form-text text-muted'></small></div>
                          </div>

			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Jam Pulang</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='pulang' class='form-control' value='$r[jam_pulang]'><small class='form-text text-muted'></small></div>
                          </div>

			


                     
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-save'></i> Simpan
                        </button>
					
                       </form>   
                      </div>		

 
  
";
?>