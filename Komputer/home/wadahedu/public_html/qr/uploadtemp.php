<?php
include "koneksi.php";

			
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
	
$foto1 = mysqli_real_escape_string($kon, $foto);
		
		
		if($numrow > 1){



$query = "INSERT INTO temp (urut,id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES('$nama1',
'$nis','$kelas','$username','$password','$foto1')"  or die (mysqli_error($kon));
$hasil = mysqli_query($kon, $query);

}	
$numrow++;

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
                      
               

     


	
	
	
	   </div>
	     </div>
	    </div>
	</div>
";
?>