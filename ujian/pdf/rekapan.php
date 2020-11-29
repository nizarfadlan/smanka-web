<?php
include "../system/koneksi.php";




$peserta =mysqli_query($kon, "select * from peserta ");
while($kl=mysqli_fetch_array($peserta)){

$user=$kl['no_ujian'];


		$cektobk=mysqli_query($kon, "select * from tobk where no_ujian='$user' ");
$ketemu=mysqli_num_rows($cektobk);
if($ketemu>0){
	mysqli_query($kon, "update tobk set m1='$nilainya', m2='$nilainya', m3='$nilainya', m4='$nilainya' where no_ujian='$user'")
or die ("SQL Error: ".mysqli_error());
}else{	
		$sql = mysqli_query($kon, "insert into tobk (nama,no_ujian,m1,m2,m3,m4,ratarata,keterangan) values 
		('$kl[nama]','$user','$kl[jurusan]','','','','','$kl[mapel_pil]')"); 

}		


			
	
}

		
echo "<script>;window.location='tobknya.php'</script>";
?>