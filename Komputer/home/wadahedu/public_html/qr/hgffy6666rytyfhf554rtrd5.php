<?php

include "koneksi.php";


date_default_timezone_set('Asia/Jakarta');
$jam_menit=date("H:i");
 $arr = explode(":", $jam_menit);
 $waktunya=$arr[0] * 60 + $arr[1];

echo"
  <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='css/font-awesome.min.css'>
	 <link rel='stylesheet' href='style.css'>";
	 



$nis=$_POST['semprul'];
$user=$_POST['togel'];
$pass=$_POST['tuyul'];



$login=mysqli_query($kon, "select * from anggota where nis='$nis' and username='$user' and password='$pass'");
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
                  			 <span class='badge badge-pill badge-success'>Success</span> Presensi Sukses.
                    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       		 <span aria-hidden='true'>&times;</span>
                   			 </button>
                				</div>
            </div>
			<div class='col-lg-12 float-right'>
			 <div class='card'>
                      <div class='card-header'>
                        <strong>$e[nama] </strong><br>
                        Waktu Absen = $tgljam
                      </div>
					  <div class='card-body card-block'>
";
if($e['foto']==''){

}	else{	
echo "	  
<center>
<img src='../komputer/peserta/$e[foto]' width='210px'>
			
	</center>
";
					  
	}	
	echo "			  
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
		




echo"
 <script src='js/jquery-3.2.1.min.js'></script>
     <script src='js/plugins.js'></script>
	 ";
	
	
	
?>