<?php

include "koneksi.php";



echo"
  <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/bootstrap.css'>

	 <link rel='stylesheet' href='style.css'>";
	 



$nis=$_GET['nis'];



$login=mysqli_query($kon, "select * from anggota where nis='$nis' ");
		
			$e=mysqli_fetch_array($login);

echo "	
			
					  
";
if($e['foto']==''){

}	else{	
echo "	
<div class='col-lg-12'>
			 <div class='card'>
                      
					  <div class='card-body card-block'>  
<center>
<img src='foto/$e[foto]' width='150px'>
			
	</center>
		</div>
		
			</div>
";
					  
	}	

								 

	
	
?>