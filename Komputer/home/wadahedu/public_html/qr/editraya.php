<?php
include "koneksi.php";
 $id = $_POST['rowid'];
 
 $swq=mysqli_query($kon, "select * from hari_besar where tanggal='$id'");
 $r=mysqli_fetch_array($swq);
  echo " 
  <form action='updateraya.php' method='post' class='form-horizontal'>
                          <input type='text' name='tanggal' value='$r[tanggal]' hidden>

			   <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Tanggal</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='tanggal1'  class='form-control' value='$r[tanggal]' disabled><small class='form-text text-muted'></small></div>
                          </div>


			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Keterangan</label></div>
                            <div class='col-12 col-md-9'><textarea id='text-input' name='keterangan' class='form-control'>$r[keterangan]</textarea></div>
                          </div>

			 
                     
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-save'></i> Simpan
                        </button>
					
                       </form>   
                      </div>		

 
  
";
?>