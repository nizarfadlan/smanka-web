<?php
include "koneksi.php";
echo"	 
 <link rel='stylesheet' href='css/bootstrap.min.css'>
   <link rel='stylesheet' href='css/font-awesome.min.css'>
   <link rel='stylesheet' href='css/datatableandro.css'>
	
 

 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Input Data Izin</strong>
						
						
					
						
                    </div>
                    <div class='card-body'>

                       
		  
		  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>Nama</th><th>NIS</th><th>Kelas</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from anggota");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "
			<tr><td>$b[nama]</td><td>$b[nis]</td><td>$b[kelas]</td><td>
			
			<a href='tanggalizin.php?id=$b[id_anggota]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-envelope'>&nbsp; Izin</i></button></a>
			
			
			
			
			</td></tr>";
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
		";


?>