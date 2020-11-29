<?php


echo "

   <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Absen Ekstra Komputer</title>
    <meta name='description' content='Eko TImo - Wadah-Edukasi'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>


    <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='css/font-awesome.min.css'>
	 <link rel='stylesheet' href='style.css'>
	 
	
	 ";
  	
if(isset($_POST['nis']))    {
include "koneksi.php";
include "indotanggal.php";
date_default_timezone_set('Asia/Jakarta');
$login=mysqli_query($kon, "select * from anggota where nis='$_POST[nis]'");
			$ketemu=mysqli_num_rows($login);
			$e=mysqli_fetch_array($login);

			if ($ketemu>0){
			$bulan=date("Y-m-d");
		
 $waktu=date("H:i:s");
			
	$tgljam=date("Y-m-d H:i:s");
				
				mysqli_query($kon, "INSERT INTO temp(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$e[id_anggota]','$tgljam', '$bulan' , '$waktu', '$waktu')") or die (mysqli_error($kon));


			
				echo "	
				<div class='col-sm-12'><br>
                <div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  			 <span class='badge badge-pill badge-success'>Success</span> Presensi Sukses $e[nama].
                    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       		 <span aria-hidden='true'>&times;</span>
                   			 </button>
                				</div>
            </div>
			
			
			<div class='col-lg-6 float-right'>
			 <div class='card'>
                      <div class='card-header'>
                        <strong>Data Presensi </strong>
                      </div>
					  <div class='card-body card-block'>
	<div class='col-lg-12 float-left'>				  
	<center><img src='foto/$e[nis].jpg' width='300px'></center>
	</div>
	<div class='col-lg-12'>	
	<center><br><br><font color='#CB1316'>$e[nama] </font>
	<br>NIS <font color='#CB1316'>$e[nis]</font>
	<br>kelas <font color='#CB1316'>$e[kelas]</font><br>
</div>
	</div>
					  
					  
				</div>
		
			</div>
							 
				";
								 
								 
		

}else {
				echo " 
				<div class='col-sm-12'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> &nbsp; Data Tidak Di temukan!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>
			
			
			";
   
} 
	

}
echo "

<div class='container'>
	<div class='col-sm-6'>
	<div class='header'>
	<h1> Absensi Dengan NIS</h1>
	</div>
	</div>
		
	
			<div class='col-lg-6'>
				 <div class='card'>
                      <div class='card-header'>
                        <strong>Masukkan NIS</strong>
                      </div>
					  <div class='card-body card-block'>
					  <form action='' method='post'>
				
					  <input type='text' name='nis' class='form-control' required autofocus>
					  
					
					  
					  
					  
					  
					  </div>
					 <div class='card-footer'> 
					  <button type='submit' class='btn btn-lg btn-info btn-block'>
                          <i class='fa fa-dot-circle-o'></i> Masuk
                        </button>
						
						  </form>
					 </div>
				 </div>
			</div>
		
		




</div>
   <script src='js/jquery-2.1.4.min.js'></script>
     <script src='js/plugins.js'></script>
   ";

?>