<?php
include "koneksi.php";
 $id = $_POST['rowid'];
 
 $swq=mysqli_query($kon,"select * from anggota where id_anggota='$id'");
 $r=mysqli_fetch_array($swq);
  echo " 
   <form action='simpanzin.php' method='post' class='form-horizontal'>
   <input type='text' name='id' hidden value='$id'>  
   <input type='text' name='nama' hidden value='$r[nama]'> 
   <input type='text' name='nis' hidden value='$r[nis]'> 
   <input type='text' name='kelas' hidden value='$r[kelas]'> 
<input type='text' id='text-input' name='id_anggota'  class='form-control' value='$r[id_anggota]' hidden>
			   <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Nama</label></div>
                            <div class='col-12 col-md-9'><label for='text-input' class=' form-control-label'>$r[nama]</label></div>
                          </div>


			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>NIS</label></div>
                            <div class='col-12 col-md-9'><label for='text-input' class=' form-control-label'>$r[nis]</label></div>
                          </div>

			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label' >Tanggal Izin</label></div>
				<div class='col-12 col-md-9'><div class='input-group'>
                 

				 
                  <input class='form-control' type='text' name='tgl' id='tgl'> 
			
			
                </div>
            </div>
		   
		   
		   <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Jenis Izin</label></div>
						<div class= 'col col-md-9'>
							<select name='izin' id='select' class='form-control'>
                                 <option value='0'>Please select</option>
								<option value='S' >Sakit</option>
								<option value='I' >Izin</option>
								<option value='L' >Lomba / Tugas lain Sekolah</option>
								
								
                               
                              </select>
						</div>
		   
		     
		   
		    </div>
			
			
			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Keterangan</label></div>
                            <div class='col-12 col-md-9'><textarea name='keterangan' class='form-control'></textarea></div>
                          </div>
			
			
			
			
			
			
			
			
			
			</div>
		
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-save'></i> Simpan
                        </button>
					
                       </form>   
                      </div>
        <script src='js/jquery.min.js'></script>
        <script src='js/jquery.maskedinput.js'></script>
        <script>
        jQuery(function($){
            $('#tgl').mask('9999-99-99',{placeholder:'yyyy/mm/dd'});
    
        });
        </script>
";
?>