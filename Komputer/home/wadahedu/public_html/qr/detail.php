<?php
include "koneksi.php";
 $id = $_POST['rowid'];
 
 $swq=mysqli_query($kon, "select * from anggota where id_anggota='$id'");
 $r=mysqli_fetch_array($swq);
  echo " 
  <form action='update.php' method='post' enctype='multipart/form-data' class='form-horizontal'>
                          

<div class='row form-group'>
						<div class='col col-md-12 text-center'>
						<img src='foto/$r[foto]' width='130px' class='bodered'>
						</div>
						
						
						</div>
						<div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Ubah Foto Siswa</label></div>
							
                            <div class='col-md-2'><input type='file' id='file-input' name='file4' > 	</div>
							<div class='col col-md-12'><small class='form-text text-muted'>Ukuran gambar tidak boleh lebih dari 1Mb.</small></div>
                          </div>

<input type='text' id='text-input' name='id_anggota'  class='form-control' value='$r[id_anggota]' hidden>
			   <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Nama</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='nama'  class='form-control' value='$r[nama]'><small class='form-text text-muted'></small></div>
                          </div>


			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>NIS</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='nis' class='form-control' value='$r[nis]'><small class='form-text text-muted'></small></div>
                          </div>

              <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Username</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='username'  class='form-control' value='$r[username]'><small class='form-text text-muted'></small></div>
                          </div>


			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Password</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='password' class='form-control' value='$r[password]'><small class='form-text text-muted'></small></div>
                          </div>

			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Kelas</label></div>
                            <div class='col-12 col-md-9'>
							
							<select name='kelas' id='select' class='form-control'> ";
							$pilih=$r[kelas];
							$kelasnya=mysqli_query($kon, "select * from kelas ");
							while ($h=mysqli_fetch_array($kelasnya)){
								
								if($pilih==$h[kelas]){ $op1='selected';}else{$op1='';}
echo "								
                             
							<option value='$h[kelas]' $op1>$h[kelas]</option>
								";
							}
							echo "
								 
								
                               
                              </select>
							
							
							</div>
                          </div>

			


                     
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-save'></i> Simpan
                        </button>
					
                       </form>   
                      </div>		

 
  
";
?>