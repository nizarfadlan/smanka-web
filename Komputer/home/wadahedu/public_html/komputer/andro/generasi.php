<?php

include "../system/koneksi.php";

if(isset($_POST['tuyul'])){
	$user = $_POST['tuyul'] ;
}else{
	$user ='';
}
if(isset($_POST['semprul'])){
	$password = $_POST['semprul'] ;
}else{
	$password ='';
}
if(isset($_POST['togel'])){
	$nisnyaaaa = $_POST['togel'] ;
}else{
	$nisnyaaaa ='';
}


$dw=$_GET['22a'];
$dtp="?22a=".$dw;
if($user!='' or $password!='' or $nisnyaaaa!=''){

}else{

if(isset($dw)){

$sw=mysqli_query($kon, "select ad from peserta where ad='$dtp'");
$r=mysqli_fetch_array($sw);
$ira=mysqli_num_rows($sw);

if($ira>0){

include "../system/indotanggal.php";
date_default_timezone_set('Asia/Jakarta');
$jam_menit=date("H:i");
 $arr = explode(":", $jam_menit);
 $waktunya=$arr[0] * 60 + $arr[1];

echo"
  <link rel='stylesheet' href='../css/normalize.css'>
    <link rel='stylesheet' href='../css/bootstrap.css'>
   
	 <link rel='stylesheet' href='../style.css'>";
	 

if($waktunya < 990){
echo "
						<div class='col-sm-12'>
						<div class='col-12 col-md-12'>
                <font size='5px' color='#ff0000'>BELUM BISA ABSEN KARENA BELUM PUKUL 16:30 </font></div>
				<div class='col-12 col-md-12'>
				<img src='../assets/bingung.png'></div>
            </div>";
} else {


if(isset($_POST['ids'])){


$login=mysqli_query($kon, "select id,nis,nama,kelas,foto from peserta where id='$_POST[ids]' and ad='$dtp'");
			$ketemu=mysqli_num_rows($login);
			$e=mysqli_fetch_array($login);
$nis2="../peserta/".$e['foto'];
$nis=$e['nis'];
			if ($ketemu>0){
			$jam=date("Y-m-d");
			$sekarang=TanggalIndo($jam);
			$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 $hr = $array_hr[date('N')];
 $jam=date("H:i:s");
			if(file_exists($nis2)){

 
 				$login1=mysqli_query($kon, "select tanggal, nis from hadir where tanggal='$sekarang' and nis='$nis'");
			$ketemu1=mysqli_num_rows($login1);
			$f=mysqli_fetch_array($login1);
 					if ($ketemu1>0){
						echo "
						<div class='col-sm-12'>
						<div class='col-12 col-md-12'>
                <font size='6px' color='#ff0000'>ANDA SUDAH ABSEN HARI INI </font></div>
				<div class='col-12 col-md-12'>
				<img src='../assets/sedih.png'></div>
            </div>>";
   			}else {
				
				mysqli_query($kon, "INSERT INTO hadir (nis,
								tanggal,
								hari,
								jam)
							VALUES ('$nis',
							'$sekarang',
							'$hr',
							'$jam')")
							
							 or die (mysqli_error($kon));


			
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
                        <strong>Data Presensi </strong>
                      </div>
					  <div class='card-body card-block'>
					  
	<img src='$nis2' width='300px'>
	<center><b>Selamat datang di Lab Komputer <br>SMAN 1 Kaliwungu <br><font color='#CB1316'>$e[nama] </font>
	<br>NIS <font color='#CB1316'>$e[nis]</font>
	<br>kelas <font color='#CB1316'>$e[kelas]</font><br>
	Selamat mengikuti kegiatan Ekstra Komputer </b><br>
	Kehadiran Ke : <br>";
	$hitung=mysqli_query($kon, "select count(hadir.nis) as jml from hadir WHERE nis='$e[nis]'");
			$f=mysqli_fetch_array($hitung);
			
		$nilai=mysqli_query($kon, "select * from nilai where nis='$nis'");
			$dapatnilai=mysqli_num_rows($nilai);
			$ew=mysqli_fetch_array($nilai);	
			$jumlahberangkat=$f['jml'];
		
			if($jumlahberangkat<=2){$hasilnilai='E';}
			else if($jumlahberangkat<=7){$hasilnilai='D';}
			else if($jumlahberangkat<=10){$hasilnilai='C';}
			else if($jumlahberangkat<=16) {$hasilnilai='B';}
			else {$hasilnilai='A';}
			
			if ($dapatnilai>0){
				mysqli_query($kon,"UPDATE nilai SET jumlah='$f[jml]',
				sementara='$hasilnilai'
							WHERE nis='$nis'")
								 or die (mysqli_error($kon));
				
			}else{
				
				mysqli_query($kon, "INSERT INTO nilai (jumlah,
								sementara,
								
								nis)
							VALUES ('$f[jml]',
							'$hasilnilai',
							
							'$nis')")
							
							 or die (mysqli_error($kon));
				
			}
			
			
	echo "
	<font size='200' color='#FF0004'><b>$f[jml]</b></font></center>
	</div>
					  
					  
				</div>
		
			</div>
			
			
							 
				";
								 
								 
								 
			}
			}else {
				echo "
						<div class='col-sm-12'>
						<div class='col-12 col-md-12'>
                <font size='5px' color='#ff0000'>TIDAK BISA ABSEN KARENA TIDAK ADA FOTONYA </font></div>
				<div class='col-12 col-md-12'>
				<img src='../assets/pusing.png'></div>
            </div>";
			}

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



echo"
 <script src='../js/jquery-3.2.1.min.js'></script>
     <script src='../js/plugins.js'></script>
	 ";

}
	}else{

	}
	}else{

	}
	}
?>