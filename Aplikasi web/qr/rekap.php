<?php
include "koneksi.php";

 $id = $_POST['rowid'];
 
 $swq=mysqli_query($kon, "select * from anggota where id_anggota='$id'");
 $r=mysqli_fetch_array($swq);
  echo " 
  <form action='pdf/cetakrekapopy.php' method='post' class='form-horizontal'>

                          
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
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Kelas</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='kelas' class='form-control' value='$r[kelas]'><small class='form-text text-muted'></small></div>
                          </div>

			 
			<div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Bulan</label></div>
 <div class='col-12 col-md-9'>
							<select name='bulan' id='select' class='form-control' required>
                                <option value=''>Please select</option>
                                <option value='01'>Januari</option>
                                <option value='02'>Februari</option>
                                <option value='03'>Maret</option>
								<option value='04'>April</option>
                                <option value='05'>Mei</option>
                                <option value='06'>Juni</option>
								<option value='07'>Juli</option>
                                <option value='08'>Agustus</option>
                                <option value='09'>September</option>
								<option value='10'>Oktober</option>
                                <option value='11'>November</option>
                                <option value='12'>Desember</option>
                              </select>
</div>
                      </div>
			<div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Tahun</label></div>
  <div class='col-12 col-md-9'>
 <select name='tahun' id='select' class='form-control' required>
                                <option value=''>Please select</option>
                                <option value='2018'>2018</option>
                                <option value='2019'>2019</option>
                                <option value='2020'>2020</option>
								<option value='2021'>2021</option>
                                <option value='2022'>2022</option>
                                <option value='2023'>2023</option>
								<option value='2024'>2024</option>
                                <option value='2025'>2025</option>
                                <option value='2026'>2026</option>
								
                              </select>
</div>
                      </div>
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-print'></i> Cetak
                        </button>
					
                       </form>   
                      </div>		

 
  
";
?>