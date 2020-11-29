 <?php
 
 echo "
<div class='kolom11'>
 		";

 if($_GET[bagian]=='home'){
	
	
echo"	 

<div class='card'>
					
                      <div class='card-header'>
                        <strong>Dashboard</strong>
                      </div>
					  
                <div class='card-body card-block'>
<a href='?bagian=home'>
 <div class='col-lg-3 col-md-6'>
                <div class='social-box facebook'>
                    <i class='fa fa-dashboard'></i>
                    
                       
                            <span>Dashboard</span>
                       
                   
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?bagian=sekolah'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box twitter'>
                    <i class='fa fa-home'></i>
                    <span>Identitas Sekolah</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?bagian=siswa'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box linkedin'>
                    <i class='fa fa-users'></i>
                    <span>Upload Data Siswa</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?bagian=cetak'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box google-plus'>
                    <i class='fa fa-credit-card'></i>
                    <span>Cetak Kartu Peserta</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?bagian=soal'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box twitter2'>
                    <i class='fa fa-book'></i>
                   <span>Upload Soal</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>			
<a href='?bagian=status'>			
			 <div class='col-lg-3 col-md-6'>
                <div class='social-box facebook2'>
                    <i class='fa fa-archive'></i>
                   <span>Aktifkan Test</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>

<a href='?bagian=reset'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box linkedin2'>
                    <i class='fa fa-refresh'></i>
                    <span>Reset Peserta</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
<a href='?bagian=hasil'>
            <div class='col-lg-3 col-md-6'>
                <div class='social-box google-plus2'>
                    <i class='fa fa-edit'></i>
                   <span>Report Test</span>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
</a>
</div>
</div>
		
		 ";
 }
elseif($_GET['bagian']=='sekolah'){


if(isset($_POST['perbaiki'])){

$file  = $_FILES['F1']['name'];


		
		if(empty($file)){
	
mysqli_query($kon, "update admin set nama_sekolah='$_POST[sekolah]', alamat='$_POST[alamat]', kepala_sekolah='$_POST[namakepsek]', nip='$_POST[nip]' where id='dataku'");

		}else {

$move= move_uploaded_file($_FILES['F1']['tmp_name'], 'asset/'.$file);			
			
mysqli_query($kon, "update admin set nama_sekolah='$_POST[sekolah]', alamat='$_POST[alamat]',foto='$file', kepala_sekolah='$_POST[namakepsek]', nip='$_POST[nip]' where id='dataku'");
		
			
		}
echo "
				<div class='col-sm-12'>
                <div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-success'>Berhasil</span> &nbsp; Data Berhasil di Ubah
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";
}
$fafa=mysqli_query($kon, "select * from admin");
$ek=mysqli_fetch_array($fafa);	
echo "

          <div class='breadcrumbs'>
            
       

        <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Data Intansi</strong>
                      </div>
                      <div class='card-body card-block'>
                        <form action='#' method='post' class='form-horizontal' enctype='multipart/form-data'>
						<input type='text' name='perbaiki' hidden>
						<div class='row form-group'>
						<div class='col-12 col-md-12'style='text-align:center'> <img src='asset/$ek[foto]' width='200px'></div>
						
						</div>
						
						 <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Ubah Logo</label></div>
                            <div class='col-12 col-md-9'>
							
							<input name='F1' type='file'>
							
							</div>
                          </div>
						
						
						
						
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Nama instansi</label></div>
                            <div class='col-12 col-md-9'><input type='text'  name='sekolah' value='$ek[nama_sekolah]' class='form-control'></div>
                          </div>
						  
						  
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Alamat Intansi</label></div>
                            <div class='col-12 col-md-9'><input type='text'  name='alamat' value='$ek[alamat]'  class='form-control'></div>
                          </div>
						  
						   <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Nama Kepala Sekolah</label></div>
                            <div class='col-12 col-md-9'><input type='text'  name='namakepsek' value='$ek[kepala_sekolah]'  class='form-control'></div>
                          </div>
						  
						  
						  
						   <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>No. Pegawai/ NIP</label></div>
                            <div class='col-12 col-md-9'><input type='text'  name='nip' value='$ek[nip]' class='form-control'></div>
                          </div>
                       
                      </div>
                      <div class='card-footer'>
                        <button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-dot-circle-o'></i> Ubah
                        </button>
                        </form>
                      </div>
                    </div>

        </div>
    </div>
	</div>
	";	
	
	
}
elseif($_GET['bagian']=='test'){


if(isset($_POST['perbaiki'])){

	
	
	
mysqli_query($kon, "update test set nama_test='$_POST[sekolah]', tanggal='$_POST[alamat]',kkm='$_POST[kkm]' where id_test='1'");


echo "
				<div class='col-sm-12'>
                <div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-success'>Berhasil</span> &nbsp; Data Berhasil di Ubah
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";
}
$fafa=mysqli_query($kon, "select * from test");
$ek=mysqli_fetch_array($fafa);	
echo "

          <div class='breadcrumbs'>
            
       

        <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Jenis Test dan tanggal laporan</strong>
                      </div>
                      <div class='card-body card-block'>
                        <form action='#' method='post' class='form-horizontal' enctype='multipart/form-data'>
						<input type='text' name='perbaiki' hidden>
					
						
						
						 
						
						
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Jenis Test</label></div>
                            <div class='col-12 col-md-9'><input type='text'  name='sekolah' value='$ek[nama_test]' class='form-control'></div>
                          </div>
						  
						  
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Tanggal Laporan</label></div>
                            <div class='col-12 col-md-9'><input type='text'  name='alamat' value='$ek[tanggal]'  class='form-control'></div>
                          </div>


 <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>KKM</label></div>
                            <div class='col-12 col-md-9'><input type='text'  name='kkm' value='$ek[kkm]' class='form-control'></div>
                          </div>

						  
						  </div>
                      <div class='card-footer'>
                        <button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-dot-circle-o'></i> Ubah
                        </button>
                        </form>
                      </div>
                    </div>

        </div>
    </div>
	</div>
	";	
	
	
}

elseif($_GET['bagian']=='kop'){


if(isset($_POST['perbaiki'])){
	
	$file  = $_FILES['F1']['name'];


		
		if(empty($file)){
	
	
	
	mysqli_query($kon, "update kop set nama_sekolah='$_POST[sekolah]', pemerintah='$_POST[pemerintah]', dinas='$_POST[dinas]', alamat='$_POST[alamat]', tambahan='$_POST[tambahan]' where id='kop123'");
		}else{
$move= move_uploaded_file($_FILES['F1']['tmp_name'], 'asset/'.$file);			
mysqli_query($kon, "update kop set nama_sekolah='$_POST[sekolah]', foto='$file', pemerintah='$_POST[pemerintah]', dinas='$_POST[dinas]', alamat='$_POST[alamat]', tambahan='$_POST[tambahan]' where id='kop123'");
			
		}
echo "
				<div class='col-sm-12'>
                <div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-success'>Berhasil</span> &nbsp; Data Berhasil di Ubah
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";
}
$fafa=mysqli_query($kon, "select * from kop");
$ek=mysqli_fetch_array($fafa);	
echo "
<link rel='stylesheet' href='css/surat.css'>
          <div class='breadcrumbs'>
            
       

        <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Edit KOP Surat</strong>
                      </div>
                      <div class='card-body card-block'>
                        <form action='#' method='post' class='form-horizontal' enctype='multipart/form-data'>
						<input type='text' name='perbaiki' hidden>
						<div class='kotak'>
						<div class='kopsurat'>
							<img src='asset/$ek[foto]'>
						</div>
					   <div class='kotakjudul'>
								<div class='pemerintah'><input type='text' value='$ek[pemerintah]' name='pemerintah' class='ukuran'></div>
								<div class='dinas'><input type='text' value='$ek[dinas]' name='dinas' class='ukuran'></div>
								<div class='sekolah'><input type='text' value='$ek[nama_sekolah]' name='sekolah' class='ukuran'></div>
								<div class='alamat'><input type='text' value='$ek[alamat]' name='alamat' class='ukuran'></div>
								<div class='tambahan'><input type='text' value='$ek[tambahan]' name='tambahan' class='ukuran'></div>
								
					   </div>
					   </div>
					   
					   <br><br><br>
					   
					   <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Ubah Logo</label></div>
                            <div class='col-12 col-md-9'>
							
							<input name='F1' type='file'>
							
							</div>
                          </div>
					   
                      </div>
                      <div class='card-footer'>
                        <button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-edit'></i> Ubah
                        </button>
                        </form>
                      </div>
                    </div>

        </div>
    </div>
	</div>
	";	
	
	
}


elseif($_GET['bagian']=='siswa'){

echo "

          <div class='breadcrumbs'>
           ";
			
if(isset($_POST['upload1'])){			
include "system/excel_reader2.php";


$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);



for ($i=2; $i<=$hasildata; $i++)
{
  
  $username = $data->val($i,1); 
  $password = $data->val($i,2); 
  $nama1 = $data->val($i,3);
  $kelas = $data->val($i,4);
  $jurusan = $data->val($i,5); 
  $nis = $data->val($i,6); 
  $foto = $data->val($i,7); 
  $mapil = $data->val($i,8); 
 
 
$nama = mysqli_real_escape_string($kon, $nama1);

  $cekpeserta=mysqli_query($kon, "select*from peserta where no_ujian='$username' ");
  $ditemukan=mysqli_num_rows($cekpeserta);
  if($ditemukan>0){
  }else{

$query = "INSERT INTO peserta (no_ujian, password, nama, kelas,nis,foto,jurusan,mapel_pil) VALUES     ('$username','$password','$nama','$kelas', '$nis', '$foto', '$jurusan', '$mapil')";
$hasil = mysqli_query($kon, $query);
  }
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
					
echo"
        <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Data Siswa</strong> Form
                      </div>
					  
					
					  
					  
                      <div class='card-body card-block'>
					  <form method='post' enctype='multipart/form-data' action='' class='form-horizontal'>
                  			<input name='upload1' value='upload1' hidden>			
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Upload Data Siswa berupa file excell 97-2003 (.xls)</label></div>
                            <div class='col-12 col-md-9'>
							
							<input  name='fileexcel' type='file' required>
							
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


elseif($_GET['bagian']=='foto'){

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
            $path ='foto/thumbs';

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
elseif($_GET['bagian']=='gambar'){

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
            $path =gambar;

            // Extract file
            $zip->extractTo($path);
            $zip->close();

            
			$dir='gambar/';
			if(glob($dir . '*.*') !=false){
				$hitungfile= count(glob($dir .'*.*'));
					
		mysqli_query($kon, "update cek set jumlah='$hitungfile' where id_cek='6'")
or die ("SQL Error: ".mysqli_error());			
			}
        
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success </span> Gambar di Soal Berhasil Di Upload.
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
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Gambar di Soal!
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
                        <strong>Upload Gambar di Soal</strong>
                      </div>
					  
					
					  
					  
                      <div class='card-body card-block'>
					  <form method='post' enctype='multipart/form-data' action='' class='form-horizontal'>
                  			<input name='upload1' value='upload1' hidden>			
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Gambar tidak boleh dalam folder langsung di zip</label></div>
                            <div class='col-12 col-md-9'>
							
							<input  name='file' type='file' required>
							
							</div>
                          </div>
						  
						  
                          
                      </div>
                      <div class='card-footer'>
                        <button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-upload'></i> Upload Gambar
                        </button>
                        </form>
                      </div>
                    </div>

        </div>
    </div>
	</div>
	";	
}

elseif($_GET['bagian']=='audio'){

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
            $path =audio;

            // Extract file
            $zip->extractTo($path);
            $zip->close();

          $dir='audio/';
			if(glob($dir . '*.*') !=false){
				$hitungfile= count(glob($dir .'*.*'));
					
		mysqli_query($kon, "update cek set jumlah='$hitungfile' where id_cek='7'")
or die ("SQL Error: ".mysqli_error());			
			}  
        
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Audio di Soal Listening Berhasil Di Upload.
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
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Audio di Soal!
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
                        <strong>Upload Audio Listening</strong>
                      </div>
					  
					
					  
					  
                      <div class='card-body card-block'>
					  <form method='post' enctype='multipart/form-data' action='' class='form-horizontal'>
                  			<input name='upload1' value='upload1' hidden>			
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Audio tidak boleh dalam folder langsung di zip</label></div>
                            <div class='col-12 col-md-9'>
							
							<input  name='file' type='file' required>
							
							</div>
                          </div>
						  
						  
                          
                      </div>
                      <div class='card-footer'>
                        <button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-upload'></i> Upload Audio
                        </button>
                        </form>
                      </div>
                    </div>

        </div>
    </div>
	</div>
	";	
}
	
elseif($_GET['bagian']=='cetak'){
	
	echo"

	
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Cetak Kartu Peserta &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					  <a href='pdf/cetak.php'>
					  <button type='button' class='btn btn-primary btn-sm' id='sembunyi'>
                          <i class='fa fa-print'></i> Cetak
                        </button>
					  </a>
					  </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>No</th><th>Nama</th><th>User Name</th><th>Password</th><th>Kelas</th><th>Jurusan</th><th>Mapel Pilihan</th></tr>
				</thead> 
				<tbody>";
                  			
              $sql97=mysqli_query($kon, "select * from peserta");
			  $no=1;
while($f=mysqli_fetch_array($sql97)){

	echo "
			  <tr><td>$no</td><td>$f[nama]</td><td>$f[no_ujian]</td><td>$f[password]</td><td>$f[kelas]</td><td>$f[jurusan]</td><td>$f[mapel_pil]</td></tr>";
			  $no++;
}
echo "
			 </tbody>   
            </table>
			
			
		
			
			
		  <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			         
                    </div>

        </div>
    </div>
	</div>
	";
	
}

elseif($_GET[bagian]=='soal'){
echo "

          <div class='breadcrumbs'>
           ";
			
if($_POST['tabel']==umum){			
include "system/excel_reader2.php";


$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);



for ($i=2; $i<=$hasildata; $i++)
{
  
 $no_soal = $data->val($i,1); 
  $mapel = $data->val($i,2);
  $kelas = $data->val($i,3);
  $jurusan = $data->val($i,4);
  $id_mapel = $data->val($i,5); 
  $tanya1 = $data->val($i,6);
  $ja1 = $data->val($i,7); 
  $jb1 = $data->val($i,8); 
  $jc1 = $data->val($i,9);
  $jd1 = $data->val($i,10); 
  $je1 = $data->val($i,11);
  $kunci1 = $data->val($i,12);
  $waktu = $data->val($i,13);
  $jumlah_soal = $data->val($i,14); 



$kunci=strtoupper($kunci1);

$tanya3 = mysqli_real_escape_string($kon, $tanya1);
$ja3 = mysqli_real_escape_string($kon, $ja1);
$jb3 = mysqli_real_escape_string($kon, $jb1);
$jc3 = mysqli_real_escape_string($kon, $jc1);
$jd3 = mysqli_real_escape_string($kon, $jd1);
$je3 = mysqli_real_escape_string($kon, $je1);


$tanya2=trim($tanya3);
$ja2=trim($ja3);
$jb2=trim($jb3);
$jc2=trim($jc3);
$jd2=trim($jd3);
$je2=trim($je3);


$tanya=str_replace('  ',' ',$tanya2);
$ja=str_replace('  ',' ',$ja2);
$jb=str_replace('  ',' ',$jb2);
$jc=str_replace('  ',' ',$jc2);
$jd=str_replace('  ',' ',$jd2);
$je=str_replace('  ',' ',$je2);

  
mysqli_set_charset($kon, 'utf8');

$cekpeserta=mysqli_query($kon, "select*from soal where no_soal='$no_soal' and id_mapel='$id_mapel' ");
  $ditemukan=mysqli_num_rows($cekpeserta);
  if($ditemukan>0){
  }else{


$query2 = "INSERT INTO soal (no_soal, mapel, kelas, id_mapel, pertanyaan, A, B, C, D, E, kunci, waktu, jumlah_soal,jurusan) VALUES 
('$no_soal','$mapel','$kelas','$id_mapel','$tanya', '$ja', '$jb', '$jc', '$jd','$je', '$kunci','$waktu', '$jumlah_soal', '$jurusan')" ;
$hasil = mysqli_query($kon, $query2);

  }

}

			
if($hasil){
	
	
		$sqlsiswa=mysqli_query($kon, "select mapel, id_mapel, kelas, waktu, jumlah_soal,jurusan from soal group by id_mapel");
			$no=1;
			while($b=mysqli_fetch_array($sqlsiswa)){
		$idm=$b['id_mapel'];
		$kls=$b['kelas'];
		$wkt=$b['waktu'];
		$jurusan=$b['jurusan'];
		$map=$b['mapel'];
		$jml=$b['jumlah_soal'];
		$stat=0;
	
		$cekmapel=mysqli_query($kon, "select * from ujian where id_mapel='$idm' ");
		$ada=mysqli_num_rows($cekmapel);
		if($ada>0){
		}else{
		
	mysqli_query($kon, "INSERT INTO ujian (id_mapel,
								mapel,
								 waktu,
								 aktif,
								 kelas,
								jurusan,
								 jumlah_soal)
							VALUES ('$idm',
									'$map',
									'$wkt',
									'$stat',
									'$kls',
									'$jurusan',
									'$jml')")
							 or die ("SQL Error: ".mysqli_error());
							 
			$nama=$idm.'jawaban';
			
$sql=mysqli_query($kon, "CREATE TABLE IF NOT EXISTS $nama (
 id int(11) AUTO_INCREMENT PRIMARY KEY,
  id_mapel varchar(20) NOT NULL,
  urutan int(5) NOT NULL,
  tanya varchar(5) NOT NULL,
  j1 varchar(1) NOT NULL,
  j2 varchar(1) NOT NULL,
  j3 varchar(1) NOT NULL,
  j4 varchar(1) NOT NULL,
  j5 varchar(1) NOT NULL,
  jawab varchar(100) NOT NULL,
  kunci varchar(100) NOT NULL,
  kunci2 varchar(300) NOT NULL,
  kunci3 varchar(300) NOT NULL,
  nilai int(1) NOT NULL,
  user varchar(50) NOT NULL,
  status int(1) NOT NULL,
  tanggal varchar(25) NOT NULL,
  waktu_awal time NOT NULL,
  waktu_update time NOT NULL,
  sisa_waktu int(10) NOT NULL,
  total_waktu varchar(10) NOT NULL,
  ragu int(1) NOT NULL,
  tambahan varchar(22) NOT NULL	,
INDEX (user)   	

)ENGINE=MyISAM DEFAULT CHARSET=latin1;" );

					 
		}
		$no++;
			}
			
			
		$hitung341=mysqli_query($kon, "select count(soal.id_soal) as jmltotal from soal");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];	
			
	mysqli_query($kon, "update cek set jumlah='$total' where id_cek='1'")
or die ("SQL Error: ".mysqli_error());
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Soal berhasil di upload.
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
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Soal!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div> ";
						}
}
	
			
if($_POST['tabel']==mtk){			
include "system/excel_reader2.php";


$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);



for ($i=2; $i<=$hasildata; $i++)
{
  
 $no_soal = $data->val($i,1); 
  $mapel = $data->val($i,2);
  $kelas = $data->val($i,3);
  $jurusan = $data->val($i,4);
  $id_mapel = $data->val($i,5); 
  $tanya1 = $data->val($i,6);
  $ja1 = $data->val($i,7); 
  $jb1 = $data->val($i,8); 
  $jc1 = $data->val($i,9);
  $jd1 = $data->val($i,10); 
  $je1 = $data->val($i,11);
  $kunci1 = $data->val($i,12);
  $waktu = $data->val($i,13);
  $jumlah_soal = $data->val($i,14); 



$kunci=strtoupper($kunci1);

$tanya3 = mysqli_real_escape_string($kon, $tanya1);
$ja3 = mysqli_real_escape_string($kon, $ja1);
$jb3 = mysqli_real_escape_string($kon, $jb1);
$jc3 = mysqli_real_escape_string($kon, $jc1);
$jd3 = mysqli_real_escape_string($kon, $jd1);
$je3 = mysqli_real_escape_string($kon, $je1);


$tanya2=trim($tanya3);
$ja2=trim($ja3);
$jb2=trim($jb3);
$jc2=trim($jc3);
$jd2=trim($jd3);
$je2=trim($je3);


$tanya=str_replace('  ',' ',$tanya2);
$ja=str_replace('  ',' ',$ja2);
$jb=str_replace('  ',' ',$jb2);
$jc=str_replace('  ',' ',$jc2);
$jd=str_replace('  ',' ',$jd2);
$je=str_replace('  ',' ',$je2);

  
mysqli_set_charset($kon, 'utf8');

$cekpeserta=mysqli_query($kon, "select*from soalmtk where no_soal='$no_soal' and id_mapel='$id_mapel' ");
  $ditemukan=mysqli_num_rows($cekpeserta);
  if($ditemukan>0){
  }else{


$query2 = "INSERT INTO soalmtk (no_soal, mapel, kelas, id_mapel, pertanyaan, A, B, C, D, E, kunci, waktu, jumlah_soal,jurusan) VALUES 
('$no_soal','$mapel','$kelas','$id_mapel','$tanya', '$ja', '$jb', '$jc', '$jd','$je', '$kunci','$waktu', '$jumlah_soal', '$jurusan')" ;
$hasil = mysqli_query($kon, $query2);

  }

}

			
if($hasil){
	
	
		$sqlsiswa=mysqli_query($kon, "select mapel, id_mapel, kelas, waktu, jurusan, jumlah_soal from soalmtk group by id_mapel");
			$no=1;
			while($b=mysqli_fetch_array($sqlsiswa)){
		$idm=$b['id_mapel'];
		$kls=$b['kelas'];
		$wkt=$b['waktu'];
		$jurusan=$b['jurusan'];
		$map=$b['mapel'];
		$jml=$b['jumlah_soal'];
		$stat=0;
	
		$cekmapel=mysqli_query($kon, "select * from ujian where id_mapel='$idm' ");
		$ada=mysqli_num_rows($cekmapel);
		if($ada>0){
		}else{
	mysqli_query($kon, "INSERT INTO ujian (id_mapel,
								mapel,
								 waktu,
								 aktif,
								 kelas,
								jurusan,
								 jumlah_soal,
								 spesial)
							VALUES ('$idm',
									'$map',
									'$wkt',
									'$stat',
									'$kls',
									'$jurusan',
									'$jml',
									'1')")
							 or die ("SQL Error: ".mysqli_error());
							 
		$nama=$idm.'jawaban';
			
$sql=mysqli_query($kon, "CREATE TABLE IF NOT EXISTS $nama (
 id int(11) AUTO_INCREMENT PRIMARY KEY,
  id_mapel varchar(20) NOT NULL,
  urutan int(5) NOT NULL,
  tanya varchar(5) NOT NULL,
  j1 varchar(1) NOT NULL,
  j2 varchar(1) NOT NULL,
  j3 varchar(1) NOT NULL,
  j4 varchar(1) NOT NULL,
  j5 varchar(1) NOT NULL,
  jawab varchar(100) NOT NULL,
  kunci varchar(100) NOT NULL,
  kunci2 varchar(300) NOT NULL,
  kunci3 varchar(300) NOT NULL,
  nilai int(1) NOT NULL,
  user varchar(50) NOT NULL,
  status int(1) NOT NULL,
  tanggal varchar(25) NOT NULL,
  waktu_awal time NOT NULL,
  waktu_update time NOT NULL,
  sisa_waktu int(10) NOT NULL,
  total_waktu varchar(10) NOT NULL,
  ragu int(1) NOT NULL,
  tambahan varchar(22) NOT NULL,
INDEX (user)   

)ENGINE=MyISAM DEFAULT CHARSET=latin1;" );					 
							 
							 
		}
		$no++;
			}
			
			$hitung341=mysqli_query($kon, "select count(soalmtk.id_soal) as jmltotal from soalmtk");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];	
			
	mysqli_query($kon, "update cek set jumlah='$total' where id_cek='2'")	
	or die ("SQL Error: ".mysqli_error());		
	
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Soal berhasil di upload.
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
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Soal!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div> ";
						}
}



			
if($_POST['tabel']==essay){			
include "system/excel_reader2.php";


$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);



for ($i=2; $i<=$hasildata; $i++)
{
  
 $no_soal = $data->val($i,1); 
  $mapel = $data->val($i,2);
  $kelas = $data->val($i,3);
  $jurusan = $data->val($i,4);
  $id_mapel = $data->val($i,5); 
  $tanya1 = $data->val($i,6);
   $kunci1a = $data->val($i,7);
   $kunci2a = $data->val($i,8);
   $kunci3a = $data->val($i,9);
  $waktu = $data->val($i,10);
  $jumlah_soal = $data->val($i,11); 

if(empty($kunci2a)){
	$kunci2b='ZONKKKK WKWKW';
}else {
	$kunci2b=$kunci2a ;
}
	
if(empty($kunci3a)){
	$kunci3b='ZONKKKK WKWKW';
}else {
	$kunci3b=$kunci3a ;
}


$tanya3 = mysqli_real_escape_string($kon, $tanya1);



$tanya2=trim($tanya3);



$tanya=str_replace('  ',' ',$tanya2);


  
mysqli_set_charset($kon, 'utf8');

$cekpeserta=mysqli_query($kon, "select*from soalmtkessay where no_soal='$no_soal' and id_mapel='$id_mapel' ");
  $ditemukan=mysqli_num_rows($cekpeserta);
  if($ditemukan>0){
  }else{


$query2 = "INSERT INTO soalmtkessay (no_soal, mapel, kelas, id_mapel, pertanyaan, kunci1, kunci2, kunci3, waktu, jumlah_soal,jurusan) VALUES 
('$no_soal','$mapel','$kelas','$id_mapel','$tanya', '$kunci1a','$kunci2b','$kunci3b','$waktu', '$jumlah_soal', '$jurusan')" ;
$hasil = mysqli_query($kon, $query2);

  }

}

			
if($hasil){
	$hitung341=mysqli_query($kon, "select count(soalmtkessay.id_soal) as jmltotal from soalmtkessay");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];	
			
	mysqli_query($kon, "update cek set jumlah='$total' where id_cek='3'")	
	or die ("SQL Error: ".mysqli_error());	
	
		
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Soal berhasil di upload.
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
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Soal!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div> ";
						}
}




if($_POST['tabel']==inggris){			
include "system/excel_reader2.php";


$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);



for ($i=2; $i<=$hasildata; $i++)
{
  
 $no_soal = $data->val($i,1); 
  $mapel = $data->val($i,2);
  $kelas = $data->val($i,3);
  $jurusan = $data->val($i,4);
  $id_mapel = $data->val($i,5); 
  $tanya1 = $data->val($i,6);
  $ja1 = $data->val($i,7); 
  $jb1 = $data->val($i,8); 
  $jc1 = $data->val($i,9);
  $jd1 = $data->val($i,10); 
  $je1 = $data->val($i,11);
  $kunci1 = $data->val($i,12);
  $waktu = $data->val($i,13);
  $jumlah_soal = $data->val($i,14); 



$kunci=strtoupper($kunci1);

$tanya3 = mysqli_real_escape_string($kon, $tanya1);
$ja3 = mysqli_real_escape_string($kon, $ja1);
$jb3 = mysqli_real_escape_string($kon, $jb1);
$jc3 = mysqli_real_escape_string($kon, $jc1);
$jd3 = mysqli_real_escape_string($kon, $jd1);
$je3 = mysqli_real_escape_string($kon, $je1);


$tanya2=trim($tanya3);
$ja2=trim($ja3);
$jb2=trim($jb3);
$jc2=trim($jc3);
$jd2=trim($jd3);
$je2=trim($je3);


$tanya=str_replace('  ',' ',$tanya2);
$ja=str_replace('  ',' ',$ja2);
$jb=str_replace('  ',' ',$jb2);
$jc=str_replace('  ',' ',$jc2);
$jd=str_replace('  ',' ',$jd2);
$je=str_replace('  ',' ',$je2);

  
mysqli_set_charset($kon, 'utf8');

$cekpeserta=mysqli_query($kon, "select*from soalinggris where no_soal='$no_soal' and id_mapel='$id_mapel' ");
  $ditemukan=mysqli_num_rows($cekpeserta);
  if($ditemukan>0){
  }else{


$query2 = "INSERT INTO soalinggris (no_soal, mapel, kelas, id_mapel, pertanyaan, A, B, C, D, E, kunci, waktu, jumlah_soal,jurusan) VALUES 
('$no_soal','$mapel','$kelas','$id_mapel','$tanya', '$ja', '$jb', '$jc', '$jd','$je', '$kunci','$waktu', '$jumlah_soal', '$jurusan')" ;
$hasil = mysqli_query($kon, $query2);

  }

}

			
if($hasil){
	
	
		$sqlsiswa=mysqli_query($kon, "select mapel, id_mapel, kelas, waktu,jurusan, jumlah_soal from soalinggris group by id_mapel");
			$no=1;
			while($b=mysqli_fetch_array($sqlsiswa)){
		$idm=$b['id_mapel'];
		$kls=$b['kelas'];
		$wkt=$b['waktu'];
		$jurusan=$b['jurusan'];
		$map=$b['mapel'];
		$jml=$b['jumlah_soal'];
		$stat=0;
	$cekmapel=mysqli_query($kon, "select * from ujian where id_mapel='$idm' ");
		$ada=mysqli_num_rows($cekmapel);
		if($ada>0){
		}else{
		
	mysqli_query($kon, "INSERT INTO ujian (id_mapel,
								mapel,
								 waktu,
								 aktif,
								 kelas,
								jurusan,
								 jumlah_soal,
								 spesial)
							VALUES ('$idm',
									'$map',
									'$wkt',
									'$stat',
									'$kls',
									'$jurusan',
									'$jml',
									'2')")
							 or die ("SQL Error: ".mysqli_error());
							 
		$nama=$idm.'jawaban';
			
$sql=mysqli_query($kon, "CREATE TABLE IF NOT EXISTS $nama (
 id int(11) AUTO_INCREMENT PRIMARY KEY,
  id_mapel varchar(20) NOT NULL,
  urutan int(5) NOT NULL,
  tanya varchar(5) NOT NULL,
  j1 varchar(1) NOT NULL,
  j2 varchar(1) NOT NULL,
  j3 varchar(1) NOT NULL,
  j4 varchar(1) NOT NULL,
  j5 varchar(1) NOT NULL,
  jawab varchar(100) NOT NULL,
  kunci varchar(100) NOT NULL,
  kunci2 varchar(300) NOT NULL,
  kunci3 varchar(300) NOT NULL,
  nilai int(1) NOT NULL,
  user varchar(50) NOT NULL,
  status int(1) NOT NULL,
  tanggal varchar(25) NOT NULL,
  waktu_awal time NOT NULL,
  waktu_update time NOT NULL,
  sisa_waktu int(10) NOT NULL,
  total_waktu varchar(10) NOT NULL,
  ragu int(1) NOT NULL,
  tambahan varchar(22) NOT NULL	,
INDEX (user)   	

)ENGINE=MyISAM DEFAULT CHARSET=latin1;" );					 
							 
							 
		}
		$no++;
			}
			
			$hitung341=mysqli_query($kon, "select count(soalinggris.id_soal) as jmltotal from soalinggris");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];	
			
	mysqli_query($kon, "update cek set jumlah='$total' where id_cek='4'")	
	or die ("SQL Error: ".mysqli_error());	
			
	
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Soal berhasil di upload.
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
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Soal!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div> ";
						}
}



if($_POST['tabel']==listening){			
include "system/excel_reader2.php";


$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);



for ($i=2; $i<=$hasildata; $i++)
{
  
 $no_soal = $data->val($i,1); 
  $mapel = $data->val($i,2);
  $kelas = $data->val($i,3);
  $jurusan = $data->val($i,4);
  $id_mapel = $data->val($i,5);
$listening = $data->val($i,6);   
  $tanya1 = $data->val($i,7);
  $ja1 = $data->val($i,8); 
  $jb1 = $data->val($i,9); 
  $jc1 = $data->val($i,10);
  $jd1 = $data->val($i,11); 
  $je1 = $data->val($i,12);
  $kunci1 = $data->val($i,13);
  $waktu = $data->val($i,14);
  $jumlah_soal = $data->val($i,15); 



$kunci=strtoupper($kunci1);

$tanya3 = mysqli_real_escape_string($kon, $tanya1);
$ja3 = mysqli_real_escape_string($kon, $ja1);
$jb3 = mysqli_real_escape_string($kon, $jb1);
$jc3 = mysqli_real_escape_string($kon, $jc1);
$jd3 = mysqli_real_escape_string($kon, $jd1);
$je3 = mysqli_real_escape_string($kon, $je1);


$tanya2=trim($tanya3);
$ja2=trim($ja3);
$jb2=trim($jb3);
$jc2=trim($jc3);
$jd2=trim($jd3);
$je2=trim($je3);


$tanya=str_replace('  ',' ',$tanya2);
$ja=str_replace('  ',' ',$ja2);
$jb=str_replace('  ',' ',$jb2);
$jc=str_replace('  ',' ',$jc2);
$jd=str_replace('  ',' ',$jd2);
$je=str_replace('  ',' ',$je2);

  
mysqli_set_charset($kon, 'utf8');

$cekpeserta=mysqli_query($kon, "select*from soallistening where no_soal='$no_soal' and id_mapel='$id_mapel' ");
  $ditemukan=mysqli_num_rows($cekpeserta);
  if($ditemukan>0){
  }else{


$query2 = "INSERT INTO soallistening (no_soal, mapel, kelas, id_mapel,listening, pertanyaan, A, B, C, D, E, kunci, waktu, jumlah_soal,jurusan) VALUES 
('$no_soal','$mapel','$kelas','$id_mapel', '$listening', '$tanya', '$ja', '$jb', '$jc', '$jd','$je', '$kunci','$waktu', '$jumlah_soal', '$jurusan')" ;
$hasil = mysqli_query($kon, $query2);

  }

}

			
if($hasil){
	
			$hitung341=mysqli_query($kon, "select count(soallistening.id_soal) as jmltotal from soallistening");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];	
			
	mysqli_query($kon, "update cek set jumlah='$total' where id_cek='5'")	
	or die ("SQL Error: ".mysqli_error());
		
	
							echo "
							 <div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Soal berhasil di upload.
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
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Soal!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div> ";
						}
}


if($_POST['tabel']==pg){      
include "system/excel_reader2.php";


$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);



for ($i=2; $i<=$hasildata; $i++)
{
  
 $no_soal = $data->val($i,1); 
  $mapel = $data->val($i,2);
  $kelas = $data->val($i,3);
  $jurusan = $data->val($i,4);
  $id_mapel = $data->val($i,5); 
  $tanya1 = $data->val($i,6);
  $ja1 = $data->val($i,7); 
  $jb1 = $data->val($i,8); 
  $jc1 = $data->val($i,9);
  $jd1 = $data->val($i,10); 
  $je1 = $data->val($i,11);
  $kunci1 = $data->val($i,12);
  $waktu = $data->val($i,13);
  $jumlah_soal = $data->val($i,14); 



$kunci=strtoupper($kunci1);

$tanya3 = mysqli_real_escape_string($kon, $tanya1);
$ja3 = mysqli_real_escape_string($kon, $ja1);
$jb3 = mysqli_real_escape_string($kon, $jb1);
$jc3 = mysqli_real_escape_string($kon, $jc1);
$jd3 = mysqli_real_escape_string($kon, $jd1);
$je3 = mysqli_real_escape_string($kon, $je1);


$tanya2=trim($tanya3);
$ja2=trim($ja3);
$jb2=trim($jb3);
$jc2=trim($jc3);
$jd2=trim($jd3);
$je2=trim($je3);


$tanya=str_replace('  ',' ',$tanya2);
$ja=str_replace('  ',' ',$ja2);
$jb=str_replace('  ',' ',$jb2);
$jc=str_replace('  ',' ',$jc2);
$jd=str_replace('  ',' ',$jd2);
$je=str_replace('  ',' ',$je2);

  
mysqli_set_charset($kon, 'utf8');

$cekpeserta=mysqli_query($kon, "select * from soalpg where no_soal='$no_soal' and id_mapel='$id_mapel' ");
  $ditemukan=mysqli_num_rows($cekpeserta);
  if($ditemukan>0){
  }else{


$query2 = "INSERT INTO soalpg (no_soal, mapel, kelas, id_mapel, pertanyaan, A, B, C, D, E, kunci, waktu, jumlah_soal,jurusan) VALUES 
('$no_soal','$mapel','$kelas','$id_mapel','$tanya', '$ja', '$jb', '$jc', '$jd','$je', '$kunci','$waktu', '$jumlah_soal', '$jurusan')" ;
$hasil = mysqli_query($kon, $query2);

  }

}

      
if($hasil){
  
  
    $sqlsiswa=mysqli_query($kon, "select mapel, id_mapel, kelas, waktu, jurusan, jumlah_soal from soalpg group by id_mapel");
      $no=1;
      while($b=mysqli_fetch_array($sqlsiswa)){
    $idm=$b['id_mapel'];
    $kls=$b['kelas'];
    $wkt=$b['waktu'];
    $jurusan=$b['jurusan'];
    $map=$b['mapel'];
    $jml=$b['jumlah_soal'];
    $stat=0;
  
    $cekmapel=mysqli_query($kon, "select * from ujian where id_mapel='$idm' ");
    $ada=mysqli_num_rows($cekmapel);
    if($ada>0){
    }else{
  mysqli_query($kon, "INSERT INTO ujian (id_mapel,
                mapel,
                 waktu,
                 aktif,
                 kelas,
                jurusan,
                 jumlah_soal,
                 spesial)
              VALUES ('$idm',
                  '$map',
                  '$wkt',
                  '$stat',
                  '$kls',
                  '$jurusan',
                  '$jml',
                  '4')")
               or die ("SQL Error: ".mysqli_error());
               
    $nama=$idm.'jawaban';
      
$sql=mysqli_query($kon, "CREATE TABLE IF NOT EXISTS $nama (
 id int(11) AUTO_INCREMENT PRIMARY KEY,
  id_mapel varchar(20) NOT NULL,
  urutan int(5) NOT NULL,
  tanya varchar(5) NOT NULL,
  j1 varchar(1) NOT NULL,
  j2 varchar(1) NOT NULL,
  j3 varchar(1) NOT NULL,
  j4 varchar(1) NOT NULL,
  j5 varchar(1) NOT NULL,
  jawab varchar(100) NOT NULL,
  kunci varchar(100) NOT NULL,
  kunci2 varchar(300) NOT NULL,
  kunci3 varchar(300) NOT NULL,
  nilai int(1) NOT NULL,
  user varchar(50) NOT NULL,
  status int(1) NOT NULL,
  tanggal varchar(25) NOT NULL,
  waktu_awal time NOT NULL,
  waktu_update time NOT NULL,
  sisa_waktu int(10) NOT NULL,
  total_waktu varchar(10) NOT NULL,
  ragu int(1) NOT NULL,
  tambahan varchar(22) NOT NULL,
INDEX (user)   

)ENGINE=MyISAM DEFAULT CHARSET=latin1;" );           
               
               
    }
    $no++;
      }
      
          
  
              echo "
               <div class='col-sm-12'>
                      <div class='alert  alert-success alert-dismissible fade show' role='alert'>
                         <span class='badge badge-pill badge-success'>Success</span> Soal berhasil di upload.
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
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Soal!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div> ";
            }
}



      
if($_POST['tabel']==pgessay){     
include "system/excel_reader2.php";


$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);



for ($i=2; $i<=$hasildata; $i++)
{
  
 $no_soal = $data->val($i,1); 
  $mapel = $data->val($i,2);
  $kelas = $data->val($i,3);
  $jurusan = $data->val($i,4);
  $id_mapel = $data->val($i,5); 
  $tanya1 = $data->val($i,6);
   
  $waktu = $data->val($i,7);
  $jumlah_soal = $data->val($i,8); 



$tanya3 = mysqli_real_escape_string($kon, $tanya1);



$tanya2=trim($tanya3);



$tanya=str_replace('  ',' ',$tanya2);


  
mysqli_set_charset($kon, 'utf8');

$cekpeserta=mysqli_query($kon, "select * from soalpgessay where no_soal='$no_soal' and id_mapel='$id_mapel' ");
  $ditemukan=mysqli_num_rows($cekpeserta);
  if($ditemukan>0){
  }else{


$query2 = "INSERT INTO soalpgessay (no_soal, mapel, kelas, id_mapel, pertanyaan, waktu, jumlah_soal,jurusan) VALUES 
('$no_soal','$mapel','$kelas','$id_mapel','$tanya', '$waktu', '$jumlah_soal', '$jurusan')" ;
$hasil = mysqli_query($kon, $query2);

  }

}

      
if($hasil){
  
  
    
              echo "
               <div class='col-sm-12'>
                      <div class='alert  alert-success alert-dismissible fade show' role='alert'>
                         <span class='badge badge-pill badge-success'>Success</span> Soal berhasil di upload.
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
                  <span class='badge badge-pill badge-danger'>Error</span> Gagal Upload Soal!
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
                        <strong>Upload Soal</strong> Form
                      </div>
				 <div class='card-body card-block'>
				<form method='post' enctype='multipart/form-data' action='' class='form-horizontal'>	  
				  <div class='row form-group'>
					    <div class='col col-md-3'><label for='text-input' class=' form-control-label'>Pilih Soal</label></div>
						<div class= 'col col-md-4'>
							<select name='tabel' id='select' class='form-control' required>
                                <option value=''>Please select</option>
								<option value='mtk'>Matematika</option>
								<option value='essay'>Matematika Essay</option>
								<option value='inggris'>Bahasa Inggris</option>
								<option value='listening'>Listening</option>
								
								<option value='pg'>Pilihan Ganda</option>
								<option value='pgessay'>Essay Kertas</option>
								<option value='umum'>Mapel Semua PG</option>
								
                               
                              </select>
						</div> 
					</div>

				
					  
					  
                     
                  				
                          <div class='row form-group'>
                            <div class='col col-md-3'><label class=' form-control-label'>Upload Soal berupa file excell 97-2003 (.xls)</label></div>
                            <div class='col-12 col-md-9'>
							
							<input  name='fileexcel' type='file' required>
							
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


elseif($_GET[bagian]=='token'){
	
	
	echo "
	<script src='js/jquery-latest.js'></script> 
		<script>
		var refreshId = setInterval(function()
		{
			 $('#responsecontainer').load('tampiltoken.php');
		}, 2000);
		</script>
				
		

 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
			<div class='card'>
                      <div class='card-header'>
                        <strong><font size='30px'><div class='responsecontainer'>TOKEN :</div></strong> &nbsp <font color='red'><strong><div id='responsecontainer'>
		</div></strong></font> </font>
                      </div>
			</div>
			</div>
                
                 
					  
					 
					
    </div>
	</div>

";
}
elseif($_GET[bagian]=='status'){
	include "system/koneksi.php";
	
	
	echo "

<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
			
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Aktifkan Test &nbsp;  &nbsp;  &nbsp;  &nbsp;</strong>
                      			 
					  </div>
					  
					 
						  
						  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>Pelajaran</th><th>Kode Mapel</th><th>Kelas</th><th>Jurusan</th><th>waktu</th><th>Pilihan</th><th>Status</th></tr>
				</thead> 
				<tbody>";
               			
           $sqlsiswa=mysqli_query($kon, "select * from ujian");
			$no=1;
			while($b=mysqli_fetch_array($sqlsiswa)){
			
				$aktif=$b['aktif'];

	echo "
				<tr><td>$b[mapel]</td><td>$b[id_mapel]</td><td>$b[kelas]</td><td>$b[jurusan]</td><td>$b[waktu] Menit</td> ";
				if($aktif==0){
				echo "
				<td><a href='aktif.php?mapel=$b[id_mapel]&stat=1'> 
				<button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-unlock'></i>&nbsp &nbsp Aktifkan </button>
				</a></td><td><div class='biru'>Non Aktif</div></td></tr> ";
				}else{
					echo "
				
				
				<td><a href='aktif.php?mapel=$b[id_mapel]&stat=0'>
				<button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-lock'></i>&nbsp &nbsp Non Aktifkan </button>
				</a></td> </td><td><div class='merah'>Ujian</div></td></tr> ";
				
				
			}
	
	
			
					
			$no++;
			}

 echo "
			 </tbody>   
            </table>
			
			
		
			
			
		  <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			         
                    </div>

        </div>
    </div>
	</div>

";
}

elseif($_GET[bagian]=='reset'){
	
echo "

<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Reset Peserta Test &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					 
					  </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>No Ujian</th><th>Nama</th><th>Reset</th></tr>
				</thead> 
				<tbody>";
               			
          $sqlsiswa=mysqli_query($kon, "select * from status where status='1'");
		 
			while($b=mysqli_fetch_array($sqlsiswa)){
 echo "
			<tr><td>$b[user]</td><td>$b[nama]</td><td><a href='reset1.php?user=$b[user]&id=$b[id_mapel]'>
			<button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-refresh'></i>&nbsp &nbsp Reset</button>
			</a></td></tr>";
		
			}
 echo "
			 </tbody>   
            </table>
			
			
		
			
			
		  <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			         
                    </div>

        </div>
    </div>
	</div>

";
 
}	

elseif($_GET[bagian]=='hasil'){
	echo "
<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script> 
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
<script>
$(document).ready(function() {
	$('#kelas').change(function() { // Jika Select Box id provinsi dipilih
		var eko = $(this).val(); // Ciptakan variabel provinsi
		$.ajax({
			type: 'POST', // Metode pengiriman data menggunakan POST
			url: 'reportnya.php', // File yang akan memproses data
			data: 'kirim=' + eko, // Data yang akan dikirim ke file pemroses
			success: function(response) { // Jika berhasil
				$('.kelas').html(response); // Berikan hasil ke id kota
			}
		});
    });
});
</script>

 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Cetak Nilai &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong> 
						<a href='cetak.php'><button type='button' class='btn btn-primary btn-sm'>
                          <i class='fa fa-list-alt'></i> &nbsp;  Export ke Excel
                        </button></a>
                      
					  
						
						
						<a onclick=\"window.open('assets/code/siswa.php'); \" href='pdf/raport.php'><button type='button' class='btn btn-danger btn-sm'>
                          <i class='fa fa-list-alt'></i> &nbsp;  Raport Siswa
                        </button></a>
						
						
						
					 
					  </div>
					  
                      <div class='card-body card-block'>
					 
	 <br>
		
						<div class= 'col col-md-6'>
							
	<select  id='kelas' class='form-control'>
<option selected>- Pilih Mapel -</option> ";
 $tampil=mysqli_query($kon, "SELECT * FROM ujian");

while($t=mysqli_fetch_array($tampil)){
echo "<option value='$t[id_mapel]'>$t[mapel]</option>";
}

echo "
</select>
	</div>			  
					  
					  
					  
					  
					  
					  
                      <div class='card-body card-block'>
					  <div class='kelas'></div>
					  
					  
			         
                    </div>

        </div>
    </div>
	</div>		
		
			
			

			         
                    </div>

        </div>
    </div>
	</div>

";
	
}


elseif($_GET[bagian]=='backup'){
	
	
	echo"

<div class='breadcrumbs'>
        	<div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Backup Data</strong>
                      </div>
		  <div class='card-body card-block'>
		 <form action='test.php' method='post' name='postform'>

	
	    <input type='submit' name='backup'  onClick=\"return confirm('Apakah Anda yakin?')\"value='Backup' class='button' />

</form>
</div>
	</div> 
			
 </div>		
 </div>
";


		 
		 


 

			
 
}

elseif($_GET[bagian]=='restore'){
	
	echo"

<div class='breadcrumbs'>
        	<div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Restore Data</strong>
                      </div>
		  <div class='card-body card-block'>
			
			<form enctype='multipart/form-data' action='' method='post'>
<input type='file' name='datafile' size='30' /required>
	<input type='submit' onclick=\"return confirm('Apakah Anda yakin akan restore database?')\" name='restore' value='Restore' class='button'/>

</form>
";
if(isset($_POST['restore'])){
	include "system/koneksi.php";
	mysqli_set_charset($kon, 'utf8');
	
	$nama_file=$_FILES['datafile']['name'];
	$ukuran=$_FILES['datafile']['size'];
	
	//periksa jika data yang dimasukan belum lengkap
	if ($nama_file=="")
	{
		echo "Fatal Error";
	}else{
		//definisikan variabel file dan alamat file
		$uploaddir='./restore/';
		$alamatfile=$uploaddir.$nama_file;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile))
		{
			
			$filename = './restore/'.$nama_file.'';
			
			// Temporary variable, used to store current query
			$templine = '';
			// Read in entire file
			$lines = file($filename);
			// Loop through each line
			foreach ($lines as $line)
			{
				// Skip it if it's a comment
				if (substr($line, 0, 2) == '--' || $line == '')
					continue;
			 
				// Add this line to the current segment
				$templine .= $line;
				// If it has a semicolon at the end, it's the end of the query
				if (substr(trim($line), -1, 1) == ';')
				{
					
					// Perform the query
					mysqli_query($kon, $templine);
					// Reset temp variable to empty
					$templine = '';
				}
			}
			echo "
			
			<div class='col-sm-12'>
                			<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Restore Data Berhasil.
                    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       		 <span aria-hidden='true'>&times;</span>
                   			 </button>
                				</div>
           					 </div>
			
			";
		
		}else{
			//jika gagal
			echo "Proses upload gagal, kode error = " . $_FILES['location']['error'];
		}	
	}

}else{
	unset($_POST['restore']);
}

			
	echo "	
			</div>
			
            </div>";
 
}
elseif($_GET[bagian]=='edit'){
	
 echo"
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Edit Soal &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					    </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>No.</th><th>Id Mapel</th><th>Mapel</th><th>Kelas</th><th>Aksi</th>
				</thead> 
				<tbody>";
                  			
            $tampil=mysqli_query($kon, "select * FROM ujian");
 $no=1;
while($t=mysqli_fetch_array($tampil)){

	echo "
		<tr><td>$no</td><td>$t[id_mapel]</td><td>$t[mapel]</td><td>$t[kelas]</td><td><a href='?bagian=muncul&kirim=$t[id_mapel]&sp=$t[spesial]'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a></td></tr> ";

			  $no++;
}
echo "
			 </tbody>   
            </table>
			
			
		
			
			
		  <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			         
                    </div>

        </div>
    </div>
	</div>
	";
}	
elseif($_GET[bagian]=='editsoal'){
	
	include "system/koneksi.php";
	$tabel1=$_GET['sp'];
	$bag=$_GET['bag'];
	$tabel=$tabel1.$bag;
	if($tabel=='1a'){
		$linknya='soalmtkessay';
	}
	if($tabel=='1'){
		$linknya='soalmtk';
	}
	if($tabel=='2a'){
		$linknya='soallistening';
	}if($tabel=='2'){
		$linknya='soalinggris';
	}
	if($tabel=='0'){
		$linknya='soal';
	}

  if($tabel=='4a'){
    $linknya='soalpgessay';
  }
  if($tabel=='4'){
    $linknya='soalpg';
  }


	$editsoal=mysqli_query($kon, "select * from $linknya where id_mapel='$_GET[id]' and no_soal='$_GET[no]'");
	$e=mysqli_fetch_array($editsoal);
		include "soal1.php";


 
}	

elseif($_GET[bagian]=='muncul'){
	

echo " 
<div class='tengah'>
        	
						
            <div class='kontentengah'>	";
	
	include "soal.php";
echo "
</div>
</div>";
 
}	
elseif($_GET[bagian]=='ujian'){
	echo"


<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Reset Ujian &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					 
					  </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>No Ujian</th><th>Nama</th><th>Kode Mapel</th><th>Aksi</th></tr>
				</thead> 
				<tbody>";
                  			
           $sqlselesai=mysqli_query($kon, "select * from selesai inner join peserta on selesai.no_ujian = peserta.no_ujian ");
			while($v=mysqli_fetch_array($sqlselesai)){

	echo "
			<tr><td>$v[no_ujian]</td><td>$v[nama]</td><td>$v[id_mapel]</td><td><a href='ulangi.php?ujian=$v[no_ujian]&mapel=$v[id_mapel]' class='merah'> Hapus</a></td></tr>";
			
			}
echo "
			 </tbody>   
            </table>
			
			
		
			
			
		  <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			         
                    </div>

        </div>
    </div>
	</div> ";
 
}


elseif($_GET[bagian]=='client'){
	
 	
 echo"
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Aktifkan Nilai Di Client &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					    </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>Pilihan</th><th>Status</th></tr>
				</thead> 
				<tbody>";
				$sql8=mysqli_query($kon, "select * from client");
			$r=mysqli_fetch_array($sql8);
			
			if($r[aktif]==0){
				echo "
            <tr><td><a href='client.php?stat=1'> 
			<button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-unlock'></i>&nbsp &nbsp Aktifkan</button> </a> </td><td>Nilai Tidak Muncul di Client</td></tr> ";
			}else{
			echo "
			<tr><td><a href='client.php?stat=0'>
			<button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-lock'></i>&nbsp &nbsp Non Aktifkan</button>
			</a> </td><td> Nilai Muncul di Client </td></tr> ";
			      			
           
			}
	
			echo"  </td></tr>
			 </tbody>   
            </table>
			
			
		
			
			
		  <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			         
                    </div>

        </div>
    </div>
	</div>
	";
}




elseif($_GET[bagian]=='ragu'){
	
 	
 echo"
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Option Ragu ragu &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					    </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>Pilihan</th><th>Status</th></tr>
				</thead> 
				<tbody>";
				$sql9=mysqli_query($kon, "select * from ragu");
			$s=mysqli_fetch_array($sql9);
			
			if($s[status]==0){
				echo "
            <tr><td><a href='ragu.php?stat=1'> 
			<button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-unlock'></i>&nbsp &nbsp Aktifkan</button> </a> </td><td>Option Ragu-ragu di Non Aktifkan</td></tr> ";
			}else{
			echo "
			<tr><td><a href='ragu.php?stat=0'>
			<button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-lock'></i>&nbsp &nbsp Non Aktifkan</button>
			</a> </td><td> Option Ragu-ragu di Munculkan </td></tr> ";
			      			
           
			}
	
			echo"  </td></tr>
			 </tbody>   
            </table>
			
			
		
			
			
		  <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			         
                    </div>

        </div>
    </div>
	</div>
	";
}

elseif($_GET[bagian]=='acak'){
	
 	
 echo"
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Acak Soal &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					    </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>Pilihan</th><th>Status</th></tr>
				</thead> 
				<tbody>";
				$sql8=mysqli_query($kon, "select * from acak");
			$r=mysqli_fetch_array($sql8);
			
			if($r[aktif]==0){
				echo "
            <tr><td><a href='acak2.php?stat=1'> 
			<button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-unlock'></i>&nbsp &nbsp Aktifkan Acak Soal</button> </a> </td><td>Soal dan Jawaban Tidak Diacak</td></tr> ";
			}else{
			echo "
			<tr><td><a href='acak2.php?stat=0'>
			<button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-lock'></i>&nbsp &nbsp Non Aktifkan Soal Acak</button>
			</a> </td><td> Soal dan Jawaban Di Acak </td></tr> ";
			      			
           
			}
	
			echo"  </td></tr>
			 </tbody>   
            </table>
			
			
		
			
			
		  <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			         
                    </div>

        </div>
    </div>
	</div>
	";
}



elseif($_GET[bagian]=='hapus'){
	
	echo"
<div class='breadcrumbs'>
        	<div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Hapus Data</strong>
                      </div>
		  <div class='card-body card-block'>
		<a href='hapus.php' onclick=\"return confirm('Anda Yakin Akan Menghapus Semua Data?')\" class='button'>
		 <button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-eraser'></i> Hapus Data
                        </button>
		
		</a>
		<div>
 Lakukan Backup Data Sebelum Menghapus Seluruh Data </a>
</div>

 
			</div>
			
            </div>";
 
}

elseif($_GET['bagian']=='butir'){
	
	echo"
<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script> 	
	 <script>
$(document).ready(function() {
	$('#kelas').change(function() { // Jika Select Box id provinsi dipilih
		var eko = $(this).val(); // Ciptakan variabel provinsi
		$.ajax({
			type: 'POST', // Metode pengiriman data menggunakan POST
			url: 'analisis.php', // File yang akan memproses data
			data: 'kirim=' + eko, // Data yang akan dikirim ke file pemroses
			success: function(response) { // Jika berhasil
				$('.kelas').html(response); // Berikan hasil ke id kota
			}
		});
    });
});
</script>
	
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Analisis Butir Soal &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					 
					  
					  
					  </div>
					  
					  <br>
		
						<div class= 'col col-md-6'>
							
	<select  id='kelas' class='form-control'>
<option selected>- Pilih Mapel -</option> ";
 $tampil=mysqli_query($kon, "SELECT * FROM ujian");

while($t=mysqli_fetch_array($tampil)){
echo "<option value='$t[spesial]$t[id_mapel]'>$t[mapel]</option>";
}

echo "
</select>
	</div>			  
					  
					  
					  
					  
					  
					  
                      <div class='card-body card-block'>
					  <div class='kelas'></div>
					  
					  
			         
                    </div>

        </div>
    </div>
	</div>
	";
	
}

elseif($_GET[bagian]=='password'){
	
if(isset($_POST['edit'])){
	
	$sql=mysqli_query($kon,"select * from admin");
	
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


elseif($_GET[bagian]=='hapustest'){
  include "system/koneksi.php";
  
  
  echo "

<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
     <div class='content mt-3'>

            <div class='col-sm-12'>
      
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Hapus Mapel Test &nbsp;  &nbsp;  &nbsp;  &nbsp;</strong>
                             
            </div>
            
           
              
              
                      <div class='card-body card-block'>
            <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

      <tr><th>Pelajaran</th><th>Kode Mapel</th><th>Kelas</th><th>Jurusan</th><th>waktu</th><th>Pilihan</th></tr>
        </thead> 
        <tbody>";
                    
           $sqlsiswa=mysqli_query($kon, "select * from ujian");
      $no=1;
      while($b=mysqli_fetch_array($sqlsiswa)){
      
        $aktif=$b['aktif'];

  echo "
        <tr><td>$b[mapel]</td><td>$b[id_mapel]</td><td>$b[kelas]</td><td>$b[jurusan]</td><td>$b[waktu] Menit</td> 
        <td><a href='hapustest.php?mapel=$b[id_mapel]&spesial=$b[spesial]'> 
        <button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash'></i>&nbsp &nbsp Hapus </button>
        </a></td></tr> ";
     
        
  
      
          
      $no++;
      }

 echo "
       </tbody>   
            </table>
      
      
    
      
      
      <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
       <script src='assets/js/lib/data-table/datatables.min.js'></script> 
       <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
        <script src='assets/js/lib/data-table/datatables-init.js'></script> 
               
                    </div>

        </div>
    </div>
  </div>

";
}


elseif($_GET[bagian]=='preview'){
  
 echo"
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
     <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Preview Konten Soal &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
            
              </div>
            
                      <div class='card-body card-block'>
            <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

      <tr><th>No.</th><th>Id Mapel</th><th>Mapel</th><th>Kelas</th><th>Aksi</th>
        </thead> 
        <tbody>";
                        
            $tampil=mysqli_query($kon, "select * FROM ujian");
 $no=1;
while($t=mysqli_fetch_array($tampil)){

$tipe=$t['spesial'];

if($tipe=='1'){
  $jml=$t['jumlah_soal'] +5 ; 
}else if($tipe=='2'){
  $jml=$t['jumlah_soal']+15;    
  }else if($tipe=='4'){
$erte=mysqli_query($kon, "select * from soalpgessay where id_mapel='$t[id_mapel]'");
$v=mysqli_fetch_array($erte);

  $jml=$t['jumlah_soal']+ $v['jumlah_soal'];    
  }else{
  $jml=$t['jumlah_soal']; 
}



  echo "
    <tr><td>$no</td><td>$t[id_mapel]</td><td>$t[mapel]</td><td>$t[kelas]</td><td><a href='sebelum.php?kirim=$t[id_mapel]&sp=$t[spesial]&nomer=1&jml=$jml&batas=$t[jumlah_soal]'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-search'></i>&nbsp Preview</button></a></td></tr> ";

        $no++;
}
echo "
       </tbody>   
            </table>
      
      
    
      
      
      <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
       <script src='assets/js/lib/data-table/datatables.min.js'></script> 
       <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
        <script src='assets/js/lib/data-table/datatables-init.js'></script> 
               
                    </div>

        </div>
    </div>
  </div>
  ";
} 


elseif($_GET['bagian']=='ulangan'){
  
  echo"
<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>   
   <script>
$(document).ready(function() {
  $('#kelas').change(function() { // Jika Select Box id provinsi dipilih
    var eko = $(this).val(); // Ciptakan variabel provinsi
    $.ajax({
      type: 'POST', // Metode pengiriman data menggunakan POST
      url: 'ulangan.php', // File yang akan memproses data
      data: 'kirim=' + eko, // Data yang akan dikirim ke file pemroses
      success: function(response) { // Jika berhasil
        $('.kelas').html(response); // Berikan hasil ke id kota
      }
    });
    });
});
</script>
  
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
     <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Analisis  Ulangan &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
           
            
            
            </div>
            
            <br>
    
            <div class= 'col col-md-6'>
              
  <select  id='kelas' class='form-control'>
<option selected>- Pilih Mapel -</option> ";
 $tampil=mysqli_query($kon, "SELECT * FROM ujian");

while($t=mysqli_fetch_array($tampil)){
echo "<option value='$t[spesial]$t[id_mapel]'>$t[mapel]</option>";
}

echo "
</select>
  </div>        
            
            
            
            
            
            
                      <div class='card-body card-block'>
            <div class='kelas'></div>
            
            
               
                    </div>

        </div>
    </div>
  </div>
  ";
  
}

?>
