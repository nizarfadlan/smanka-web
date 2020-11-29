<?php
if(isset($_GET['eko'])){
	$eko=$_GET['eko'];
}else{
	$eko='';
}

if($eko=='wrdsfer45345wrdfds44fdfsd'){
echo "

   <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Absen Ekstra Komputer</title>
    <meta name='description' content='Eko TImo - Wadah-Edukasi'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>


    <link rel='stylesheet' href='../css/normalize.css'>
    <link rel='stylesheet' href='../css/bootstrap.css'>
    <link rel='stylesheet' href='../css/font-awesome.min.css'>
	 <link rel='stylesheet' href='../style.css'>
	 
	
	 ";
  	
if(isset($_POST['nis']))    {
include "../system/koneksi.php";




$nis=$_POST['nis'];

$login=mysqli_query($kon, "select * from peserta where nis='$nis'");
			$ketemu=mysqli_num_rows($login);
			$e=mysqli_fetch_array($login);

			if ($ketemu>0){
			


 function get_token($panjang){ 

$token = array( range('A','Z') ); 
$karakter = array(); 
foreach($token as $key=>$val){ foreach($val as $k=>$v){ $karakter[] = $v; } } $token = null; for($i=1; $i<=$panjang; $i++){ 

$token .= $karakter[rand($i, count($karakter) - 1)]; } return $token; } 

$nilaitoken=get_token(16);
mysqli_query($kon,"update peserta set pin='$nilaitoken' where nis='$nis'");
				echo "	
			
			<div class='col-lg-6 float-right'>
			 <div class='card'>
                      <div class='card-header'>
                        <strong>Data Presensi </strong>
                      </div>
					  <div class='card-body card-block'>
					  

	<font color='#CB1316'>$e[nama] </font><br> Kelas = $e[kelas] <br>
	<br>PIN = <font color='#CB1316'>$nilaitoken</font>
	
	</div>
					  
					  
				</div>
		
			</div>
			
			
							 
				";
								 
								 
			

}else {
				echo " 
				<div class='col-sm-12'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> &nbsp; Nomer NIS Tidak Di temukan!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";
   
} 
		



}
echo "

<div class='container'>
	<div class='col-sm-6'>
	<div class='header'>
	<h1> Generate PIN</h1>
	</div>
	</div>
		
	
			<div class='col-lg-6'>
				 <div class='card'>
                      <div class='card-header'>
                        <strong>Masukkan Nomer NIS</strong>
                      </div>
					  <div class='card-body card-block'>
					  <form action='' method='post'>
				
					  <input type='text' name='nis' class='form-control' required autofocus>
					  
					
					  
					  
					  
					  
					  </div>
					 <div class='card-footer'> 
					  <button type='submit' class='btn btn-lg btn-info btn-block'>
                           Generate
                        </button>
						
						  </form>
					 </div>
					 
				 </div>
			</div>
		
		




</div>
   <script src='../js/jquery-3.2.1.min.js'></script>
     <script src='../js/plugins.js'></script>
   ";
}else{

}
?>