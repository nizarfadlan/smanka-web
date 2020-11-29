<?php
include "system/koneksi.php";
$hasil=$_GET['kirim'];
$tabel=$_GET['sp'];
echo "

<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='breadcrumbs'>       
	   <div class='content mt-3'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Edit Soal &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					  
					 
					  </div>
					  
                      <div class='card-body card-block'>
					  <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>No Soal</th><th>Kode Soal</th><th>Pelajaran</th><th>Pertanyaan</th><th>Aksi</th></tr>
				</thead> 
				<tbody>
				
				
				";
 if($tabel=='1'){
				$sqlsoal=mysqli_query($kon, "select * from soalmtk where id_mapel='$hasil'");
			$ketemu=mysqli_num_rows($sqlsoal);

			if ($ketemu>0){

			while($b=mysqli_fetch_array($sqlsoal)){

	echo "
			<tr><td>$b[no_soal]</td><td>$b[id_mapel]</td><td>$b[mapel]</td><td>$b[pertanyaan]</td><td><a href='?bagian=editsoal&no=$b[no_soal]&id=$b[id_mapel]&sp=$tabel'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a></td></tr>";
			
													}
			}
			
			$sqlsoal1=mysqli_query($kon, "select * from soalmtkessay where id_mapel='$hasil'");
			$ketemu1=mysqli_num_rows($sqlsoal1);
			if ($ketemu1>0){

			while($b1=mysqli_fetch_array($sqlsoal1)){
			echo "
			<tr><td>$b1[no_soal]</td><td>$b1[id_mapel]</td><td>$b1[mapel]</td><td>$b1[pertanyaan]</td><td><a href='?bagian=editsoal&no=$b1[no_soal]&id=$b1[id_mapel]&sp=$tabel&bag=a'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a></td></tr>";
			
													}
			}
 }if($tabel=='4'){
				$sqlsoal=mysqli_query($kon, "select * from soalpg where id_mapel='$hasil'");
			$ketemu=mysqli_num_rows($sqlsoal);

			if ($ketemu>0){

			while($b=mysqli_fetch_array($sqlsoal)){

	echo "
			<tr><td>$b[no_soal]</td><td>$b[id_mapel]</td><td>$b[mapel]</td><td>$b[pertanyaan]</td><td><a href='?bagian=editsoal&no=$b[no_soal]&id=$b[id_mapel]&sp=$tabel'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a></td></tr>";
			
													}
			}
			
			$sqlsoal1=mysqli_query($kon, "select * from soalpgessay where id_mapel='$hasil'");
			$ketemu1=mysqli_num_rows($sqlsoal1);
			if ($ketemu1>0){

			while($b1=mysqli_fetch_array($sqlsoal1)){
			echo "
			<tr><td>$b1[no_soal]</td><td>$b1[id_mapel]</td><td>$b1[mapel]</td><td>$b1[pertanyaan]</td><td><a href='?bagian=editsoal&no=$b1[no_soal]&id=$b1[id_mapel]&sp=$tabel&bag=a'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a></td></tr>";
			
													}
			}
 }else if($tabel=='2'){
				$sqlsoal=mysqli_query($kon, "select * from soalinggris where id_mapel='$hasil'");
			$ketemu=mysqli_num_rows($sqlsoal);

			if ($ketemu>0){

			while($b=mysqli_fetch_array($sqlsoal)){

	echo "
			<tr><td>$b[no_soal]</td><td>$b[id_mapel]</td><td>$b[mapel]</td><td>$b[pertanyaan]</td><td><a href='?bagian=editsoal&no=$b[no_soal]&id=$b[id_mapel]&sp=$tabel'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a></td></tr>";
			
													}
			}
			
			$sqlsoal1=mysqli_query($kon, "select * from soallistening where id_mapel='$hasil'");
			$ketemu1=mysqli_num_rows($sqlsoal1);
			if ($ketemu1>0){

			while($b1=mysqli_fetch_array($sqlsoal1)){
			echo "
			<tr><td>$b1[no_soal]</td><td>$b1[id_mapel]</td><td>$b1[mapel]</td><td>$b1[pertanyaan]</td><td><a href='?bagian=editsoal&no=$b1[no_soal]&id=$b1[id_mapel]&sp=$tabel&bag=a'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a></td></tr>";
			
													}
			}
 }else {
			$sqlsoal1=mysqli_query($kon, "select * from soal where id_mapel='$hasil'");
			$ketemu1=mysqli_num_rows($sqlsoal1);
			if ($ketemu1>0){

			while($b1=mysqli_fetch_array($sqlsoal1)){
			echo "
			<tr><td>$b1[no_soal]</td><td>$b1[id_mapel]</td><td>$b1[mapel]</td><td>$b1[pertanyaan]</td><td><a href='?bagian=editsoal&no=$b1[no_soal]&id=$b1[id_mapel]&sp=$tabel'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i>&nbsp Edit</button></a></td></tr>";
			
													}
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