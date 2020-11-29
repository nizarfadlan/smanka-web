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
                        <strong>Daftar Siswa Selesai Test &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					 
					  </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered kecil'>
                    <thead>

			<tr><th>No Ujian</th><th>Nama</th><th>Mapel</th><th>Kelas</th></tr>
				</thead> 
				<tbody>";
               			
          $sqlsiswa=mysqli_query($kon, "select * from ujian where aktif='1'");

		 
			while($b=mysqli_fetch_array($sqlsiswa)){

				$tyu=mysqli_query($kon, "select * from selesai where id_mapel='$b[id_mapel]' and status='1'");
			while($c=mysqli_fetch_array($tyu)){	

			$hu=mysqli_query($kon, "select nama,no_ujian, kelas from peserta where no_ujian='$c[no_ujian]' order by no_ujian ASC");
			$e=mysqli_fetch_array($hu);
 echo "
			<tr><td>$e[no_ujian]</td><td>$e[nama]</td><td>$b[mapel]</td><td>$e[kelas]</td></tr>";
		
			}
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