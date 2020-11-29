<?php

include "system/koneksi.php";
echo "

  <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='css/proktor.css'>
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Reset Peserta Test &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					 
					  </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered kecil'>
                    <thead>

			<tr><th>No Ujian</th><th>Nama</th><th>Reset</th></tr>
				</thead> 
				<tbody>";
               			
          $sqlsiswa=mysqli_query($kon, "select * from status where status='1'");
		 
			while($b=mysqli_fetch_array($sqlsiswa)){
 echo "
			<tr><td>$b[user]</td><td>$b[nama]</td><td><a href='reset2.php?user=$b[user]&id=$b[id_mapel]'>
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
	






?>