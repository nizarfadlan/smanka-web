<?php
if($_GET['state']=='dashboard'){
echo "

 <div class='card'>
					
                      <div class='card-header'>
                        <strong>Dashboard</strong>
                      </div>
					  
                <div class='card-body card-block'>
<a href='?state=dashboard'>
 <div class='col-lg-3 col-md-6'>
                <div class='social-box facebook'>
                    <i class='fa fa-dashboard'></i>
                    
                       
                            <span>Dashboard</span>
                       
                   
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?state=sekolah'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box twitter'>
                    <i class='fa fa-home'></i>
                    <span>Identitas Sekolah</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?state=daftar'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box linkedin'>
                    <i class='fa fa-users'></i>
                    <span>Daftar Personal</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?state=upload'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box google-plus'>
                    <i class='fa fa-upload'></i>
                    <span>Upload Personal</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?state=hapus'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box twitter2'>
                    <i class='fa fa-trash-o'></i>
                   <span>Hapus Personal Di Mesin</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>			
<a href='?state=izin'>			
			 <div class='col-lg-3 col-md-6'>
                <div class='social-box facebook2'>
                    <i class='fa fa-envelope-o'></i>
                   <span>Izin</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>

<a href='?state=rekapopd'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box linkedin2'>
                    <i class='fa fa-group'></i>
                    <span>Rekap OPD</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?state=rekap'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box google-plus2'>
                    <i class='fa fa-user'></i>
                   <span>Rekap Personal</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
</div>
</div>
";
}
 
elseif($_GET['state']=='haribesar'){
echo "


<link href='css/datepicker.css' rel='stylesheet'>
    <script type='text/javascript' src='js/jquery-1.10.2.min.js'></script> 	
	

<div class='card'>
	<div class='card-header'>
	<i class='fa fa-calendar'></i><strong> &nbsp &nbsp Input Hari Besar </strong> 
	</div>
	<div class='card-body'>
 <form action='hariraya.php' method='post' class='form-horizontal'>

			   

			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label' >Tanggal Hari Besar</label></div>
							
				<div class='col-6 col-md-3'><div class='input-group'>
                 

				 
               <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
	                <input class='form-control' type='text' name='tgl1' readonly required value=''> 
	                <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
            </div></div>
			
			
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
		
<br>
 <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                   
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>No</th><th>Tanggal</th><th>Keterangan</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
				include "tanggalbaru.php";
			$asq=mysqli_query($kon, "select * from hari_besar");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		$bulan=$b['tanggal'];
			$tglbesar=tgl_ind($b['tanggal']);
 echo "
			<tr>
			<form method='post' action='hapushari.php'>
			<td>$no<input type='text' name='tanggal' value='$b[tanggal]' hidden> </td><td>$tglbesar</td><td>$b[keterangan]</td><td>
<a href='#eko' data-toggle='terbang' data-id='$b[tanggal]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a>
		
						<button type='submit' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash-o'></i> Hapus
                        </button>
			
			</td></tr></form>";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
				
 		</div>
        </div>
<link rel='stylesheet' href='css/terbang.css'>

 <div class='terbang fade1' id='eko'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                <div class='terbang-header'>
                    <button type='button' class='close' data-dismiss='terbang'>&times;</button>
                    <div class='card-header'> <strong> Edit Hari Raya </strong> </div>
                </div>
                <div class='terbang-body'>
                    <div class='eko2'></div>
                </div>
                <div class='terbang-footer'>
                    <button type='button' class='btn btn-outline-danger btn-sm' data-dismiss='terbang'><i class='fa fa-sign-out'></i>Keluar</button>
                </div>
            </div>
        </div>
    </div>
	

<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 


	<script type='text/javascript'>
    $(document).ready(function(){
        $('#eko').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'editraya.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko2').html(data);
                }
            });
         });
    });

   

		


  </script>
    <script src='js/terbang.js' ></script>
		


		
                      </div>
					  
					  
					  
					  
					  
					  
					  
<script src='js/bootstrap-datepicker.js'></script>
    <script>
    $('.input-group.date').datepicker({autoclose: true, todayHighlight: true});
    </script>					  
					  ";



}


elseif($_GET['state']=='pengumuman'){

echo "

       
           ";
			
if(isset($_POST['upload1'])){
date_default_timezone_set('Asia/Jakarta');
$tgl=date('Y-m-d h:i:s');

mysqli_query($kon, "INSERT INTO artikel (judul,
								  konten,
								  user,
								  tgl,
								  id_kategori,
								
								  publish)
							VALUES ('$_POST[txtjudul]',
									'$_POST[txtkonten]',
									'Eko Timo',
									'$tgl',
									'1',
									
									'Y')")
							   ;
							   
 
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Pengumuman Berhasil dibuat.
                    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       		 <span aria-hidden='true'>&times;</span>
                   			 </button>
                				</div>
           					 </div>





















							";
					
						
}
			
echo"
     

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Pengumuman Sekolah</strong>
                      </div>
					  
					
					  
					  
                      <div class='card-body card-block'>
					  <form method='post'  action='' class='form-horizontal'>
                  			<input name='upload1' value='upload1' hidden>			
                        
                      <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Judul Pengumuman</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='txtjudul' class='form-control' required>		</div>
                          </div> 
						 <textarea name='txtkonten' id='eko' class='form-control-label'></textarea> 
					  
                      </div>
                      <div class='card-footer'>
                        <button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-save'></i> Simpan
                        </button>
                        </form>
                      </div>
                    </div>

        </div>






<br>
 <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                   
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>Judul Pengumuman</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
				
			$asq=mysqli_query($kon, "select * from artikel");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		
 echo "
			<tr>
			<form method='post' action='hapusartikel.php'>
			<td>$b[judul] <input type='text' name='idnya' value='$b[id]' hidden></td><td>
<a href='?state=editpengumuman&id=$b[id]' data-toggle='terbang' class='button' style='text-decoration:none;'>
<button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a>
		
						<button type='submit' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash-o'></i> Hapus
                        </button>
			
			</td></tr></form>";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
				
 		</div>
        </div>


<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 



		
                      </div>
					  
					  
					  
					  
					  
					  
					  
					  
					  




 <script src='js/jquery-3.2.1.min.js'></script>       
<script type='text/javascript' src='tinymce/tinymce.min.js'></script> 
	<script src='js/tinymce.js'></script>
	";	
}



elseif($_GET['state']=='editpengumuman'){

	$rtr=mysqli_query($kon, "select * from artikel where id='$_GET[id]'");
	$q=mysqli_fetch_array($rtr);

echo "

      

     

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Edit Pengumuman Sekolah</strong>
                      </div>
					  
					
					  
					  
                      <div class='card-body card-block'>
					  <form method='post'  action='editartikel.php' class='form-horizontal'>
                  			<input name='txtid' value='$q[id]' hidden>			
                        
                      <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Judul Pengumuman</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='txtjudul' class='form-control' value='$q[judul]'>		</div>
                          </div> 
						 <textarea name='txtkonten' id='eko' class='form-control-label'>$q[konten]</textarea> 
					  
                      </div>
                      <div class='card-footer'>
                        <button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-save'></i> Simpan
                        </button>
                        </form>
                      </div>
                    </div>

        </div>




					  
					  
					  
					  




 <script src='js/jquery-3.2.1.min.js'></script>       
<script type='text/javascript' src='tinymce/tinymce.min.js'></script> 
	<script src='js/tinymce.js'></script>
	";	
}

elseif($_GET['state']=='jadwal'){
if(isset($_POST['jadwal'])){
	$seninw=$_POST['senin'];
	$selasaw=$_POST['selasa'];
	$rabuw=$_POST['rabu'];
	$kamisw=$_POST['kamis'];
	$jumatw=$_POST['jumat'];
	mysqli_query($kon, "UPDATE jam_kerja SET senin='$_POST[senin]',
								selasa='$_POST[selasa]',
								rabu='$_POST[rabu]',
								kamis='$_POST[kamis]',
								jumat='$_POST[jumat]',
								sabtu='$_POST[sabtu]',
								minggu='$_POST[minggu]'
								
							
								
								where id='1'")
							 or die ("SQL Error: ".mysqli_error());
							 
	$carisenin=mysqli_query($kon, "select * from jadwal where jenis='$_POST[senin]'");
	$a=mysqli_fetch_array($carisenin);
	$seninm=$a['jam_masuk'];
	$seninp=$a['jam_pulang'];
	
	$cariselasa=mysqli_query($kon, "select * from jadwal where jenis='$_POST[selasa]'");
	$a2=mysqli_fetch_array($cariselasa);
	$selasam=$a2['jam_masuk'];
	$selasap=$a2['jam_pulang'];
	
	$carirabu=mysqli_query($kon, "select * from jadwal where jenis='$_POST[rabu]'");
	$a21=mysqli_fetch_array($carirabu);
	$rabum=$a21['jam_masuk'];
	$rabup=$a21['jam_pulang'];
	
	$carikamis=mysqli_query($kon, "select * from jadwal where jenis='$_POST[kamis]'");
	$a212=mysqli_fetch_array($carikamis);
	$kamism=$a212['jam_masuk'];
	$kamisp=$a212['jam_pulang'];
	
	$carijumat=mysqli_query($kon, "select * from jadwal where jenis='$_POST[jumat]'");
	$a2123=mysqli_fetch_array($carijumat);
	$jumatm=$a2123['jam_masuk'];
	$jumatp=$a2123['jam_pulang'];
	
	$carisabtu=mysqli_query($kon, "select * from jadwal where jenis='$_POST[sabtu]'");
	$a21235=mysqli_fetch_array($carisabtu);
	$sabtum=$a21235['jam_masuk'];
	$sabtup=$a21235['jam_pulang'];
	
	$cariminggu=mysqli_query($kon, "select * from jadwal where jenis='$_POST[minggu]'");
	$a212357=mysqli_fetch_array($cariminggu);
	$minggum=$a212357['jam_masuk'];
	$minggup=$a212357['jam_pulang'];
	

	mysqli_query($kon, "UPDATE kbm SET senin_masuk='$seninm',
								selasa_masuk='$selasam',
								rabu_masuk='$rabum',
								kamis_masuk='$kamism',
								jumat_masuk='$jumatm',
								sabtu_masuk='$sabtum',
								minggu_masuk='$minggum',
								senin_pulang='$seninp',
								selasa_pulang='$selasap',
								rabu_pulang='$rabup',
								kamis_pulang='$kamisp',
								jumat_pulang='$jumatp',
								sabtu_pulang='$sabtup',
								minggu_pulang='$minggup'
								
							
								
								where kode='kbm01'")
							 or die ("SQL Error: ".mysqli_error());
		

echo "
<div class='col-sm-12 '>
                <div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-success'>Berhasil</span> Jadwal Berhasil Di Simpan
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>
";
							 
}	


 $swq=mysqli_query($kon, "select * from jam_kerja where id='1'");
 $r=mysqli_fetch_array($swq);
echo "


				<div class='col-md-4'>	
				 <div class='card'>
                      <div class='card-header'>
                        <strong>Atur Jadwal Siswa</strong>
                      </div>
					  
						  
					<div class='card-body'>
					<form action='#' method='post'>
					<div class='row form-group'>
				<input type='text' name='jadwal' hidden>
					
                            <div class='col col-md-4'><label for='text-input' class=' form-control-label'>Senin</label></div>
						<div class= 'col col-md-6'>
							<select name='senin' id='select' class='form-control'>
							<option value='OFF'>OFF</option>";
							$pilih=$r[senin];
							$kelasnya=mysqli_query($kon, "select * from jadwal ");
							while ($h=mysqli_fetch_array($kelasnya)){
								
								if($pilih==$h[jenis]){ $op1='selected';}else{$op1='';}
echo "								
                             
							<option value='$h[jenis]' $op1>$h[jenis]</option>
								";
							}
							echo "
								 
								
                               
                              </select>
						</div>
				
				
					
				
                    <div class='col col-md-4'><label for='text-input' class=' form-control-label'>Selasa</label></div>
						<div class= 'col col-md-6'>
							<select name='selasa' id='select' class='form-control'>
							<option value='OFF'>OFF</option>";
							$pilih=$r[selasa];
							$kelasnya=mysqli_query($kon, "select * from jadwal ");
							while ($h=mysqli_fetch_array($kelasnya)){
								
								if($pilih==$h[jenis]){ $op1='selected';}else{$op1='';}
echo "								
                             
							<option value='$h[jenis]' $op1>$h[jenis]</option>
								";
							}
							echo "
								 
								
                               
                              </select>
						</div>     
			
					
					<div class='col col-md-4'><label for='text-input' class=' form-control-label'>Rabu</label></div>
						<div class= 'col col-md-6'>
							<select name='rabu' id='select' class='form-control'>
							<option value='OFF'>OFF</option>";
							$pilih=$r[rabu];
							$kelasnya=mysqli_query($kon, "select * from jadwal ");
							while ($h=mysqli_fetch_array($kelasnya)){
								
								if($pilih==$h[jenis]){ $op1='selected';}else{$op1='';}
echo "								
                             
							<option value='$h[jenis]' $op1>$h[jenis]</option>
								";
							}
							echo "
								 
								
                               
                              </select>
						</div>     
			
				
					<div class='col col-md-4'><label for='text-input' class=' form-control-label'>Kamis</label></div>
						<div class= 'col col-md-6'>
							<select name='kamis' id='select' class='form-control'>
							<option value='OFF'>OFF</option>";
							$pilih=$r[kamis];
							$kelasnya=mysqli_query($kon, "select * from jadwal ");
							while ($h=mysqli_fetch_array($kelasnya)){
								
								if($pilih==$h[jenis]){ $op1='selected';}else{$op1='';}
echo "								
                             
							<option value='$h[jenis]' $op1>$h[jenis]</option>
								";
							}
							echo "
								 
								
                               
                              </select>
						</div>     
					
					
					
					
					
					
					<div class='col col-md-4'><label for='text-input' class=' form-control-label'>Jumat</label></div>
						<div class= 'col col-md-6'>
							<select name='jumat' id='select' class='form-control'>
							<option value='OFF'>OFF</option>";
							$pilih=$r[jumat];
							$kelasnya=mysqli_query($kon, "select * from jadwal ");
							while ($h=mysqli_fetch_array($kelasnya)){
								
								if($pilih==$h[jenis]){ $op1='selected';}else{$op1='';}
echo "								
                             
							<option value='$h[jenis]' $op1>$h[jenis]</option>
								";
							}
							echo "
								 
								
                               
                              </select>
						</div>     
					
					
					
					<div class='col col-md-4'><label for='text-input' class=' form-control-label'>Sabtu</label></div>
						<div class= 'col col-md-6'>
							<select name='sabtu' id='select' class='form-control'>
							<option value='OFF'>OFF</option>";
							$pilih=$r[sabtu];
							$kelasnya=mysqli_query($kon, "select * from jadwal ");
							while ($h=mysqli_fetch_array($kelasnya)){
								
								if($pilih==$h[jenis]){ $op1='selected';}else{$op1='';}
echo "								
                             
							<option value='$h[jenis]' $op1>$h[jenis]</option>
								";
							}
							echo "
								 
								
                               
                              </select>
						</div>     
					
					
					
					<div class='col col-md-4'><label for='text-input' class=' form-control-label'>Minggu</label></div>
						<div class= 'col col-md-6'>
							<select name='minggu' id='select' class='form-control'>
							<option value='OFF'>OFF</option>";
							$pilih=$r[minggu];
							$kelasnya=mysqli_query($kon, "select * from jadwal ");
							while ($h=mysqli_fetch_array($kelasnya)){
								
								if($pilih==$h[jenis]){ $op1='selected';}else{$op1='';}
echo "								
                             
							<option value='$h[jenis]' $op1>$h[jenis]</option>
								";
							}
							echo "
								 
								
                               
                              </select>
						</div>     
					
					
					
					
					
				</div>	
				
                        
                      </div> 
<div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa  fa-save'></i> Simpan
                        </button>					  
				 </form>
				</div> 
		</div>	
 </div>
							<div class='col-md-8 float-right'>
							
							
							
							
							
							
							
							
							
							
							 <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Keterangan Jadwal</strong>
						
						
					<a href='#popup'>	 
                   <button type='submit' class='btn btn-primary btn-sm float-right' id='tambah'><i class='fa fa-plus-square'></i> Tambah Jadwal
                        </button>
                   	</a>
						
                    </div>
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>Kode</th><th>Masuk</th><th>Pulang</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from jadwal");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "
			<tr><td>$b[jenis]</td><td>$b[jam_masuk]</td><td>$b[jam_pulang]</td><td>
			
			<a href='#eko' data-toggle='terbang' data-id='$b[id]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a>
			<a href='#eko3' data-toggle='terbang' data-id='$b[id]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash-o'></i>&nbsp Hapus</button></a>
			
			
			
			</td></tr>";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
 		</div>
        </div>

<link rel='stylesheet' href='css/terbang.css'>

 <div class='terbang fade1' id='eko'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                <div class='terbang-header'>
                    <button type='button' class='close' data-dismiss='terbang'>&times;</button>
                    <div class='card-header'> <strong> Edit Jadwal </strong> </div>
                </div>
                <div class='terbang-body'>
                    <div class='eko2'></div>
                </div>
                <div class='terbang-footer'>
                    <button type='button' class='btn btn-outline-danger btn-sm' data-dismiss='terbang'><i class='fa fa-sign-out'></i>Keluar</button>
                </div>
            </div>
        </div>
    </div>

<div class='terbang fade1' id='eko3'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                 <div class='terbang-body'>
                    <div class='eko4'></div>
			
                </div>
                
            </div>
        </div>
    </div>

		
<link rel='stylesheet' href='assets/css/animate.css'>	


<div id='popup' class='gerak'>
<div class='window'>

<div class='col col-md-8'>
	<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Tambah Jadwal</strong>
                    </div>
                    <div class='card-body'>

                        
            
            
			
			
<form action='tambahjadwal.php' method='post' class='form-horizontal'>
                          

			   <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Jenis</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='jenis'  class='form-control' required><small class='form-text text-muted'></small></div>
                          </div>

 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Jam Masuk</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='masuk'  class='form-control' required><small class='form-text text-muted'>Format ex. 07:00:00</small></div>
                          </div>
						  
						  <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Jam pulang</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='pulang'  class='form-control' required><small class='form-text text-muted'>Format ex. 14:15:00</small></div>
                          </div>
			
			

		
                          </div>


                     
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-save'></i> Simpan
                        </button>
					<a href='?state=jadwal'>	
						<button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-times-circle'></i> Batal
                        </button></a>
                       </form>   
                      </div>		

 
                   
                   
			
			
			
	
</div>

			
			
 		
        </div> 
		</div> 

</div>
</div>

</div>

<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 
<script>
$('#tambah').click(function() {
    $('.gerak').addClass('animated fadeInDown');
});


</script>
<script type='text/javascript'>
    $(document).ready(function(){
        $('#eko').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'detailjadwal.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko2').html(data);
                }
            });
         });
    });

    $(document).ready(function(){
        $('#eko3').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'hapusjadwal.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko4').html(data);
                }
            });
         });
    });

		


  </script>
    <script src='js/terbang.js' ></script>
		
		

							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							</div>
							</div>
							</div>


 
";

}

elseif($_GET['state']=='sekolah'){
	if(isset($_POST['edit'])){
		include "thumbs.php";
		$file  = $_FILES['file4']['name'];
		if(empty($file)){
		
		mysqli_query($kon, "UPDATE sekolah SET nama_sekolah='$_POST[nama_sekolah]',
								alamat='$_POST[alamat]',
								kepsek='$_POST[kepsek]',
							
								nip='$_POST[nip]'")
							 or die ("SQL Error: ".mysqli_error());
		}else{
mysqli_query($kon, "UPDATE sekolah SET nama_sekolah='$_POST[nama_sekolah]',
								alamat='$_POST[alamat]',
								kepsek='$_POST[kepsek]',
								logo='$file',
								nip='$_POST[nip]'")
							 or die ("SQL Error: ".mysqli_error());
		}							 
	echo "

							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Data Berhasil Diubah.
                    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       		 <span aria-hidden='true'>&times;</span>
                   			 </button>
                				</div>
           					 </div>
							";
	}
		include"koneksi.php";
	$sekolah=mysqli_query($kon, "select * from sekolah ");
	$f=mysqli_fetch_array($sekolah);
	echo "
	
	
        <div class='card'>
					
                      <div class='card-header'>
                        <strong>Form</strong> Ubah Data Sekolah
                      </div>
					  
                <div class='card-body card-block'>
					  
                        <form action='' method='post' enctype='multipart/form-data' class='form-horizontal'>
						<input type='text' name='edit' hidden>
						<div class='row form-group'>
						<div class='col col-md-12 text-center'>
						<img src='asset/$f[logo]' width='130px' class='bodered'>
						</div>
						
						
						</div>
						<div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Ubah Logo Sekolah</label></div>
							
                            <div class='col-md-2'><input type='file' id='file-input' name='file4' value='$f[nama_sekolah]'> 	</div>
							<div class='col col-md-12'><small class='form-text text-muted'>Ukuran gambar tidak boleh lebih dari 1Mb.</small></div>
                          </div>
						
						
						<div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Nama Sekolah</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='nama_sekolah' class='form-control' value='$f[nama_sekolah]' required>		</div>
                          </div>
						  
						<div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Alamat Sekolah</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='alamat' class='form-control' value='$f[alamat]' required>		</div>
                          </div>
						  
						<div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Kepala Sekolah</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='kepsek' class='form-control' value='$f[kepsek]' required>		</div>
                          </div>
						  
						<div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>NIP</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='nip' class='form-control' value='$f[nip]' required>		</div>
                          </div>
						
						<div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa  fa-edit'></i> Ubah
                        </button>
                        
                      </div> 	
						</form>
				</div>		
						
		</div>				

";

}


elseif($_GET['state']=='daftar'){


echo"	 

  
    <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Daftar Siswa</strong>
						
						
					<a href='#popup'>	 
                   <button type='submit' class='btn btn-primary btn-sm float-right' id='tambah'><i class='fa fa-plus-square'></i> Tambah Anggota
                        </button>
                   	</a>
						
                    </div>
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>No</th><th>Nama</th><th>NIS</th><th>Kelas</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from anggota");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "
			<tr><td>$no</td><td>$b[nama]</td><td>$b[nis]</td><td>$b[kelas]</td><td>
			
			<a href='#eko' data-toggle='terbang' data-id='$b[id_anggota]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a>
			<a href='#eko3' data-toggle='terbang' data-id='$b[id_anggota]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash-o'></i>&nbsp Hapus</button></a>
			
			
			
			</td></tr>";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
 		</div>
        </div>

<link rel='stylesheet' href='css/terbang.css'>

 <div class='terbang fade1' id='eko'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                <div class='terbang-header'>
                    <button type='button' class='close' data-dismiss='terbang'>&times;</button>
                    <div class='card-header'> <strong> Edit Data Siswa </strong> </div>
                </div>
                <div class='terbang-body'>
                    <div class='eko2'></div>
                </div>
                <div class='terbang-footer'>
                    <button type='button' class='btn btn-outline-danger btn-sm' data-dismiss='terbang'><i class='fa fa-sign-out'></i>Keluar</button>
                </div>
            </div>
        </div>
    </div>

<div class='terbang fade1' id='eko3'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                 <div class='terbang-body'>
                    <div class='eko4'></div>
			
                </div>
                
            </div>
        </div>
    </div>

		
<link rel='stylesheet' href='assets/css/animate.css'>	


<div id='popup' class='gerak'>
<div class='window'>

<div class='col col-md-8'>
	<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Tambah Siswa</strong>
                    </div>
                    <div class='card-body'>

                        
            
            
			
			
<form action='daftar.php' method='post' enctype='multipart/form-data' class='form-horizontal'>
         <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Upload Foto</label></div>
							
                            <div class='col-md-2'><input type='file' id='file-input' name='file4'> 	</div>
							<div class='col col-md-12'><small class='form-text text-muted'>Ukuran gambar tidak boleh lebih dari 1Mb.</small></div>
                          </div>                 

			   <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Nama</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='nama'  class='form-control' required><small class='form-text text-muted'></small></div>
                          </div>


			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>NIS</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='nis' class='form-control' required><small class='form-text text-muted'></small></div>
                          </div>

             <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Username</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='username'  class='form-control' required><small class='form-text text-muted'></small></div>
                          </div>


			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Password</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='password' class='form-control' required><small class='form-text text-muted'></small></div>
                          </div>

			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Kelas</label></div>
                            <div class='col-12 col-md-9'>
							
							<select name='kelas' id='select' class='form-control'> ";
							
							$kelasnya=mysqli_query($kon, "select * from kelas ");
							while ($h=mysqli_fetch_array($kelasnya)){
								
							
echo "								
                             
							<option value='$h[kelas]' >$h[kelas]</option>
								";
							}
							echo "
								 
								
                               
                              </select>
							
						</div>
                          </div>

			

		
                          </div>


                     
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-save'></i> Simpan
                        </button>
					<a href='?state=daftar'>	
						<button type='button' class='btn btn-danger btn-sm'><i class='fa fa-times-circle'></i> Batal
                        </button></a>
                       </form>   
                      </div>		

 
                   
                   
			
			
			
	
</div>

			
			
 		
        </div> 
		</div> 

</div>
</div>

</div>

<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 
<script>
$('#tambah').click(function() {
    $('.gerak').addClass('animated fadeInDown');
});


</script>
<script type='text/javascript'>
    $(document).ready(function(){
        $('#eko').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko2').html(data);
                }
            });
         });
    });

    $(document).ready(function(){
        $('#eko3').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'hapus1.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko4').html(data);
                }
            });
         });
    });

		


  </script>
    <script src='js/terbang.js' ></script>
		
		 ";


 }
 
 elseif($_GET['state']=='hapus'){


echo"	 

  
    <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Upload Anggota Ke Mesin Presensi</strong>
						
						
					
						
                    </div>
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>ID</th><th>Nama</th><th>NIS</th><th>Kelas</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from anggota");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "<form method='post' action='#'>
			<tr><td>$b[id_anggota]</td><td>$b[nama]</td><td>$b[nis]</td><td>$b[kelas]</td><td>
			<a href='hapus-user.php?ide=$b[id_anggota]'>	
						<button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i> Hapus
                        </button></a>
			
			</td></tr></form>";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
				
 		</div>
        </div>


<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 

		 ";


 }
  elseif($_GET['state']=='jadwalpersonal'){



echo"	 

  
    <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Atur Jadwal Personal</strong>
						
						
					
						
                    </div>
                    <div class='card-body'>

                      
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>ID</th><th>Nama</th><th>Senin</th><th>Selasa</th><th>Rabu</th><th>Kamis</th><th>Jumat</th><th>Sabtu</th><th>Minggu</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from anggota");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
				
		
			
 echo "	<tr><form method='post' action='jadwalpersonal.php'>
 
 
			<td>$b[id_anggota] <input type='text' name='id' value='$b[id_anggota]' hidden>
 <input type='text' name='nama' value='$b[nama]' hidden></td><td>$b[nama] ";
 
 $pilih=mysqli_query($kon, "select * from jadwal_kerja where id_anggota='$b[id_anggota]' ");
$q=mysqli_fetch_array($pilih);


if($q['senin']=='ON'){$op1='checked';}else{$op1='';}
if($q['selasa']=='ON'){$op2='checked';}else{$op2='';}
if($q['rabu']=='ON'){$op3='checked';}else{$op3='';}
if($q['kamis']=='ON'){$op4='checked';}else{$op4='';}
if($q['jumat']=='ON'){$op5='checked';}else{$op5='';}
if($q['sabtu']=='ON'){$op6='checked';}else{$op6='';}
if($q['minggu']=='ON'){$op7='checked';}else{$op7='';}

 echo "
 </td>
								<td>
								<label class='switch switch-3d switch-danger mr-3'><input type='checkbox' class='switch-input' name='senin' value='ON' $op1 > <span class='switch-label'></span> <span class='switch-handle'></span></label>
								</td>
								<td>
								<label class='switch switch-3d switch-danger mr-3'><input type='checkbox' class='switch-input' name='selasa' value='ON' $op2 > <span class='switch-label'></span> <span class='switch-handle'></span></label>
								</td>
								<td>
								<label class='switch switch-3d switch-danger mr-3'><input type='checkbox' class='switch-input' name='rabu' value='ON' $op3 > <span class='switch-label'></span> <span class='switch-handle'></span></label>
								</td>
								<td>
								<label class='switch switch-3d switch-danger mr-3'><input type='checkbox' class='switch-input' name='kamis' value='ON' $op4 > <span class='switch-label'></span> <span class='switch-handle'></span></label>
								</td>
								<td>
								<label class='switch switch-3d switch-danger mr-3'><input type='checkbox' class='switch-input' name='jumat' value='ON' $op5 > <span class='switch-label'></span> <span class='switch-handle'></span></label>
								</td>
								<td>
								<label class='switch switch-3d switch-danger mr-3'><input type='checkbox' class='switch-input' name='sabtu' value='ON' $op6 > <span class='switch-label'></span> <span class='switch-handle'></span></label>
								</td>
								<td>
								<label class='switch switch-3d switch-danger mr-3'><input type='checkbox' class='switch-input' name='minggu' value='ON' $op7 > <span class='switch-label'></span> <span class='switch-handle'></span></label>
								</td>
								
			<td>	
						<button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-save'></i> Simpan
                        </button>	</td>			
		
			</form></tr>
		";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
			
				  
 		</div>
        </div>


<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 

		 ";


 }
  elseif($_GET['state']=='uploadsiswa'){

echo "

          <div class='breadcrumbs'>
           ";
			
if(isset($_POST['upload1'])){			

$nama_file_baru = 'data.xlsx';

				
				if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
					unlink('tmp/'.$nama_file_baru); // Hapus file tersebut

				$ext = pathinfo($_FILES['fileexcel']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
				$tmp_file = $_FILES['fileexcel']['tmp_name'];

				if($ext == "xlsx"){
					
					move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);

	require_once 'PHPExcel/PHPExcel.php';

	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); 
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

	$numrow = 1;
	foreach($sheet as $row){
		
		


 
 

		$nama1 = $row['A']; 
		$nis = $row['B']; 
		$kelas = $row['C']; 
		
		$username = $row['D']; 
		$password = $row['E']; 
		$foto = $row['F']; 
	
$nama = mysqli_real_escape_string($kon, $nama1);
		
		if($numrow > 5){

  $cekpeserta=mysqli_query($kon, "select * from anggota where nis='$nis' ");
  $ditemukan=mysqli_num_rows($cekpeserta);
  if($ditemukan>0){
  	$hasil='';
  }else{

$query = "INSERT INTO anggota (nama,nis,kelas,username,password,foto) VALUES('$nama',
'$nis','$kelas','$username','$password','$foto')"  or die (mysqli_error($kon));
$hasil = mysqli_query($kon, $query);

$cariid=mysqli_query($kon, "select * from anggota where nis='$nis' ");
$r=mysqli_fetch_array($cariid);
$nama2 = mysqli_real_escape_string($kon, $r['nama']);
mysqli_query($kon, "INSERT INTO jadwal_kerja(id_anggota,nama,senin,selasa,rabu,kamis,jumat,sabtu,minggu) VALUES ('$r[id_anggota]','$nama2' , 'ON' ,'ON' ,'ON' ,'ON' ,'ON' ,'OFF','OFF')")or die (mysqli_error($kon));


  }
}	
$numrow++;
	}		
if($hasil){
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Data Siswa Berhasil di Upload.
                    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       		 <span aria-hidden='true'>&times;</span>
                   			 </button>
                				</div>
           					 </div>
							";
							
						}else{
							echo "
							
							<div class='col-sm-12'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Data Siswa!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div> ";
						}
}
}
				
echo"
        <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Upload Data Siswa Excel</strong>
						
						<a href='template/templatesiswa.xlsx'>	 
                   <button type='submit' class='btn btn-primary btn-sm float-right' id='tambah'><i class='fa fa-download'></i> Download Template Excel
                        </button>
                   	</a>
                      </div>
					  
					
					  
					  
                      <div class='card-body card-block'>
					  <form method='post' enctype='multipart/form-data' action='' class='form-horizontal'>
                  			<input name='upload1' value='upload1' hidden>			
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Upload Data Siswa</label></div>
                            <div class='col-12 col-md-9'>
							
							<input  name='fileexcel' type='file' required><button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-upload'></i> Upload
                        </button>
							
							</div>
                          </div>
						  
						  
                          
                      </div>
                     
                        
                        </form>
                      
               

     

	
	<br><br><br>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	   </div>
	     </div>
	    </div>
	</div>
	
	<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 
	";	
}

 

elseif($_GET['state']=='uploadfoto'){

echo "

          <div class='breadcrumbs'>
           ";
			
if(isset($_POST['upload1'])){

$filename = $_FILES['file']['name'];

    // Get file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $valid_ext = array('zip');

    // Check extension
    if(in_array(strtolower($ext),$valid_ext)){
        $tmp_name = $_FILES['file']['tmp_name'];

        $zip = new ZipArchive;
        $res = $zip->open($tmp_name);
        if ($res === TRUE) {

            // Unzip path
            $path ='foto/';

            // Extract file
            $zip->extractTo($path);
            $zip->close();

            
        
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Foto Berhasil Di Upload.
                    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       		 <span aria-hidden='true'>&times;</span>
                   			 </button>
                				</div>
           					 </div>
							";
							
						}else{
							echo "
							
							<div class='col-sm-12'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Foto!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div> ";
						}
						}else{
							echo "
							
							<div class='col-sm-12'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Error</span> File yang di upload bukan ZIP!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div> ";
						}
}
					
echo"
        <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Upload Foto</strong>
                      </div>
					  
					
					  
					  
                      <div class='card-body card-block'>
					  <form method='post' enctype='multipart/form-data' action='' class='form-horizontal'>
                  			<input name='upload1' value='upload1' hidden>			
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Foto tidak boleh dalam folder langsung di zip</label></div>
                            <div class='col-12 col-md-9'>
							
							<input  name='file' type='file' required>
							
							</div>
                          </div>
						  
						  
                          
                      </div>
                      <div class='card-footer'>
                        <button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-upload'></i> Upload
                        </button>
                        </form>
                      </div>
                    </div>

        </div>
    </div>
	</div>
	";	
}



elseif($_GET['state']=='rekap'){


echo"	 

  
    <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Rekap Presensi</strong>
						
						
					
						
                    </div>
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>No</th><th>Nama</th><th>NIS</th><th>Kelas</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from anggota");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "
			<tr><td>$no</td><td>$b[nama]</td><td>$b[nis]</td><td>$b[kelas]</td><td>
			
			<a href='#eko5' data-toggle='terbang' data-id='$b[id_anggota]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-list-alt'></i>&nbsp &nbsp Rekap</button></a>
			
			
			
			
			</td></tr>";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
 		</div>
        </div>
		
		<link rel='stylesheet' href='css/terbang.css'>

 <div class='terbang fade1' id='eko5'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                <div class='terbang-header'>
                    <button type='button' class='close' data-dismiss='terbang'>&times;</button>
                    <div class='card-header'> <strong> Rekap Data Siswa </strong> </div>
                </div>
                <div class='terbang-body'>
                    <div class='eko6'></div>
                </div>
                <div class='terbang-footer'>
                    <button type='button' class='btn btn-outline-danger btn-sm' data-dismiss='terbang'><i class='fa fa-sign-out'></i>Keluar</button>
                </div>
            </div>
        </div>
    </div>

		
		
		
 <script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>
	 
<script type='text/javascript'>
    $(document).ready(function(){
        $('#eko5').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'rekap.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko6').html(data);
                }
            });
         });
    });

   
		


  </script>
    <script src='js/terbang.js' ></script>
	
    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 
<script>
 ";
}

elseif($_GET['state']=='izin'){


echo"	 

  
    <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 

 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Input Data Izin</strong>
						
						
					
						
                    </div>
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>No</th><th>Nama</th><th>NIS</th><th>Kelas</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from anggota");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "
			<tr><td>$no</td><td>$b[nama]</td><td>$b[nis]</td><td>$b[kelas]</td><td>
			
			<a href='#eko5' data-toggle='terbang' data-id='$b[id_anggota]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-envelope'></i>&nbsp &nbspIzin</button></a>
			
			
			
			
			</td></tr>";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
 		</div>
        </div>
		
		<link rel='stylesheet' href='css/terbang.css'>

 <div class='terbang fade1' id='eko5'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                <div class='terbang-header'>
                    <button type='button' class='close' data-dismiss='terbang'>&times;</button>
                    <div class='card-header'> <strong> Izin Siswa </strong> </div>
                </div>
                <div class='terbang-body'>
                    <div class='eko6'></div>
                </div>
                <div class='terbang-footer'>
                    <button type='button' class='btn btn-outline-danger btn-sm' data-dismiss='terbang'><i class='fa fa-sign-out'></i>Keluar</button>
                </div>
            </div>
        </div>
    </div>

		
		
		
 <script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>
	 
<script type='text/javascript'>
    $(document).ready(function(){
        $('#eko5').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'izin.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko6').html(data);
                }
            });
         });
    });

   
		


  </script>
    <script src='js/terbang.js' ></script>
	
    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 
<script>
 ";
}

elseif($_GET['state']=='password'){
	
if(isset($_POST['edit'])){
	
	$sql=mysqli_query($kon, "select * from admin");
	
$e=mysqli_fetch_array($sql);
$pass_lama=md5($_POST[txtpasslama]);
$pass_baru=md5($_POST[txtpassbaru]);
$pass_ulangi=md5($_POST[txtpassulangi]);

if($pass_lama<>$e[password]){
		 	echo"
<div class='col-sm-12'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> Password Lama Salah!!!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";
}else{
		if($pass_baru<>$pass_ulangi){
	echo"
<div class='col-sm-12'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> Password baru dan Ulangi Password Tidak Sama!!!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";
	

	 
	 }else{
		 mysqli_query($kon, "update admin set password='$pass_baru'");
		 
	
			echo "
			
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Password Berhasil Diubah.
                    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       		 <span aria-hidden='true'>&times;</span>
                   			 </button>
                				</div>
           					 </div>
						 
							";

}
}	
}

echo"	 

<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Ubah Password</strong>
                    </div>
                    <div class='card-body'>

                        <div class='fontawesome-icon-list'>
            
            
			
			
<form action='' method='post' class='form-horizontal'>
                          
<input type='text' name='edit' hidden>
			   <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Masukkan Password Lama</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='txtpasslama'  class='form-control' required><small class='form-text text-muted'></small></div>
                          </div>


			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Masukkan Password Baru</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='txtpassbaru' class='form-control' required><small class='form-text text-muted'></small></div>
                          </div>

			 <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Ulangi Password Baru</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='txtpassulangi' class='form-control' required><small class='form-text text-muted'></small></div>
                          </div>

			 



                     
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-dot-circle-o'></i> Submit
                        </button>
                       </form>   
                      </div>			
			
			
			
			
	
</div>

			
			
 		
        </div> 
		</div> ";
 }

elseif($_GET['state']=='rekapizin'){


echo"	 

  
    <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Rekap Izin Siswa</strong>
						
						
					<a href='izinxls.php'>	 
                   <button type='submit' class='btn btn-primary btn-sm float-right' id='tambah'><i class='fa fa-hdd-o'></i> Download
                        </button>
                   	</a>
						
                    </div>
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>Nama</th><th>NIS</th><th>Kelas</th><th>Tanggal<br>Izin</th><th>Jenis</th><th>Keterangan</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from izin");
			
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "
			<tr><td>$b[nama]</td><td>$b[nis]</td><td>$b[kelas]</td><td>$b[tanggal]</td><td>$b[izin]</td><td>$b[keterangan]</td><td>
			
			<a href='#eko' data-toggle='terbang' data-id='$b[urutan]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a>
			<a href='#eko3' data-toggle='terbang' data-id='$b[urutan]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash-o'></i>&nbsp Hapus</button></a>
			
			
			
			</td></tr>";
			
			}

 echo "
			</tbody>   
            </table>
		
 		</div>
        </div>

<link rel='stylesheet' href='css/terbang.css'>

 <div class='terbang fade1' id='eko'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                <div class='terbang-header'>
                    <button type='button' class='close' data-dismiss='terbang'>&times;</button>
                    <div class='card-header'> <strong> Edit Izin SIswa </strong> </div>
                </div>
                <div class='terbang-body'>
                    <div class='eko2'></div>
                </div>
                <div class='terbang-footer'>
                    <button type='button' class='btn btn-outline-danger btn-sm' data-dismiss='terbang'><i class='fa fa-sign-out'></i>Keluar</button>
                </div>
            </div>
        </div>
    </div>

<div class='terbang fade1' id='eko3'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                 <div class='terbang-body'>
                    <div class='eko4'></div>
			
                </div>
                
            </div>
        </div>
    </div>

		
<link rel='stylesheet' href='assets/css/animate.css'>	




</div>

<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 
<script>
$('#tambah').click(function() {
    $('.gerak').addClass('animated fadeInDown');
});


</script>
<script type='text/javascript'>
    $(document).ready(function(){
        $('#eko').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'editizinsiswa.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko2').html(data);
                }
            });
         });
    });

    $(document).ready(function(){
        $('#eko3').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'hapusizin.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko4').html(data);
                }
            });
         });
    });

		


  </script>
    <script src='js/terbang.js' ></script>
		
		 ";


 }
elseif($_GET['state']=='rekapkelas'){


echo"	 

  
    <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Rekap Presensi Kelas</strong>
						
						
					
						
                    </div>
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>No</th><th>Kelas</th><th>Bulan</th><th>Tahun</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
				$no=1;
			$asq=mysqli_query($kon, "select * from kelas");
			
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "
			<tr>
			<form method='post' action='rekapkelas.php'>
			
			<td>$no</td><td>$b[kelas]<input name='kelas' value='$b[kelas]' hidden></td><td>
			
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
			
			
			
			
			
			</td><td>
			
							<select name='tahun' id='select' class='form-control' required>
                                <option value=''>Please select</option>
                           
                                <option value='2020'>2020</option>
								<option value='2021'>2021</option>
                                <option value='2022'>2022</option>
                                <option value='2023'>2023</option>
								<option value='2024'>2024</option>
                                <option value='2025'>2025</option>
                                <option value='2026'>2026</option>
								
                              </select>
			
			
			
			
			</td><td><button type='submit' class='btn btn-outline-primary btn-sm'><i class='fa fa-hdd-o'></i>&nbsp Download</button></td></form></tr>";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
 		</div>
        </div>

</div>

<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 

		 ";


 }
elseif($_GET['state']=='keluar'){
	
session_start();
session_destroy();
echo "<script>;window.location='index.php'</script>";
 }
 
 
 
 elseif($_GET['state']=='naik'){
	echo "
 <script type='text/javascript' src='js/jquery-1.8.0.min.js'></script> 	
	 <script>
$(document).ready(function() {
	$('#kelas').change(function() { // Jika Select Box id provinsi dipilih
		var eko = $(this).val(); // Ciptakan variabel provinsi
		$.ajax({
			type: 'POST', // Metode pengiriman data menggunakan POST
			url: 'kelas.php', // File yang akan memproses data
			data: 'kirim=' + eko, // Data yang akan dikirim ke file pemroses
			success: function(response) { // Jika berhasil
				$('.kelas').html(response); // Berikan hasil ke id kota
			}
		});
    });
});
</script>
<div class='card'>
	<div class='card-header'>
	<i class='fa fa-gift'></i><strong> &nbsp &nbsp Proses Naik Kelas Dan Kelulusan </strong> 
	</div>
	<div class='card-body'>
<div class='col col-md-4'><label for='text-input' class=' form-control-label'>Pilih Kelas</label></div>
						<div class= 'col col-md-6'>
							
	<select  id='kelas' class='form-control'>
<option selected>- Pilih kelas -</option> ";
 $tampil=mysqli_query($kon, "SELECT * FROM kelas");

while($t=mysqli_fetch_array($tampil)){
echo "<option value=$t[id]>$t[kelas]</option>";
}

echo "
</select>
	</div>
	<div class='col-12'>
	<div class='kelas'></div>
	</div>
	
	
	</div>
	
</div> ";
	
	
 }
 
 
 
 
 
 
 
 
 
 
 
 
elseif($_GET['state']=='daftarkelas'){


echo"	 

  
    <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Daftar Kelas</strong>
						
						
					<a href='#popup'>	 
                   <button type='submit' class='btn btn-primary btn-sm float-right' id='tambah'><i class='fa fa-plus-square'></i> Tambah kelas
                        </button>
                   	</a>
						
                    </div>
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>No</th><th>Kelas</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from kelas");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "
			<tr><td>$no</td><td>$b[kelas]</td><td>
			
			<a href='#eko' data-toggle='terbang' data-id='$b[kelas]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a>
			<a href='#eko3' data-toggle='terbang' data-id='$b[kelas]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash-o'></i>&nbsp Hapus</button></a>
			
			
			
			</td></tr>";
			$no++;
			}

 echo "
			</tbody>   
            </table>
		
 		</div>
        </div>

<link rel='stylesheet' href='css/terbang.css'>

 <div class='terbang fade1' id='eko'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                <div class='terbang-header'>
                    <button type='button' class='close' data-dismiss='terbang'>&times;</button>
                    <div class='card-header'> <strong> Edit Kelas </strong> </div>
                </div>
                <div class='terbang-body'>
                    <div class='eko2'></div>
                </div>
                <div class='terbang-footer'>
                    <button type='button' class='btn btn-outline-danger btn-sm' data-dismiss='terbang'><i class='fa fa-sign-out'></i>Keluar</button>
                </div>
            </div>
        </div>
    </div>

<div class='terbang fade1' id='eko3'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                 <div class='terbang-body'>
                    <div class='eko4'></div>
			
                </div>
                
            </div>
        </div>
    </div>

		
<link rel='stylesheet' href='assets/css/animate.css'>	


<div id='popup' class='gerak'>
<div class='window'>

<div class='col col-md-8'>
	<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Tambah Kelas</strong>
                    </div>
                    <div class='card-body'>

                        
            
            
			
			
<form action='daftarkelas.php' method='post' class='form-horizontal'>
                          

			   <div class='row form-group'>
                            <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Kelas</label></div>
                            <div class='col-12 col-md-9'><input type='text' id='text-input' name='kelas'  class='form-control' required><small class='form-text text-muted'></small></div>
                          </div>


			
			

		
                          </div>


                     
		   
		   <div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-save'></i> Simpan
                        </button>
					<a href='?state=daftar'>	
						<button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-times-circle'></i> Batal
                        </button></a>
                       </form>   
                      </div>		

 
                   
                   
			
			
			
	
</div>

			
			
 		
        </div> 
		</div> 

</div>
</div>

</div>

<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 
<script>
$('#tambah').click(function() {
    $('.gerak').addClass('animated fadeInDown');
});


</script>
<script type='text/javascript'>
    $(document).ready(function(){
        $('#eko').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'detailkelas.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko2').html(data);
                }
            });
         });
    });

    $(document).ready(function(){
        $('#eko3').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'hapuskelas.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko4').html(data);
                }
            });
         });
    });

		


  </script>
    <script src='js/terbang.js' ></script>
		
		 ";


 }
 
 
 
 
  elseif($_GET['state']=='backup'){
	
	 	
	 if(isset($_POST['jikuk'])){
	

	$file=date("DdMY").'_finger_'.time().'.sql';
	 
		echo "	
	 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Data Berhasil Di Download mesin
                    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       		 <span aria-hidden='true'>&times;</span>
                   			 </button>
                				</div>
           					 </div> ";

	$link = mysql_connect("localhost","root","");
	mysql_set_charset('utf8',$link);
	
$name='finger2';
$nama_file=$file;

	
	mysql_select_db($name,$link);
	

		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}

	
	//looping dulu ah
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		//menyisipkan query drop table untuk nanti hapus table yang lama
		$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				//menyisipkan query Insert. untuk nanti memasukan data yang lama ketable yang baru dibuat. so toy mode : ON
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					//akan menelusuri setiap baris query didalam
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	//simpan file di folder yang anda tentukan sendiri. kalo saya sech folder "DATA"
	$nama_file;
	
	$handle = fopen('./backup/'.$nama_file,'w+');
	fwrite($handle,$return);
	fclose($handle);

} else{
	unset($_POST['backup']);
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

							 

							 
					 						 

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 echo "

<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Download SQL to WEB </strong>
                    </div> 
                    <div class='card-body'>
                     					
			
			<form action='#' method='post'>
		<input type='text' name='jikuk' hidden>
		
			

                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-download'></i> &nbsp &nbsp Download SQL
                        </button>
					</form>	
</div>



	
	
	
	
		";
	
 }
 
 
?>