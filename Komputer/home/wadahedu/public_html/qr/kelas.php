<?php
include "koneksi.php";

$hasil=$_POST['kirim'];
$data=mysqli_query($kon, "select * from kelas where id='$hasil' ");
$ee=mysqli_fetch_array($data);
$kelas=$ee['kelas'];
echo "
 <link rel='stylesheet' href='css/datatable/dataTables.bootstrap.min.css'>
	
 <br><br>
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        
						
											
                    </div>
                    <div class='card-body'>

                       
		  
		  <script src='js/jquery.selectable-list.js' type='text/javascript'></script>
 <script>
 $(function(){
            $('table').selectableList();
        });
</script>
<form method='post' action='naikkelas.php'>
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th><input type='checkbox' id='checkall'/></th><th>No</th><th>Nama</th><th>NIS</th><th>Kelas</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from anggota where kelas='$kelas'");
			$no=1;
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "		<input type='hidden' name='txtkelas' value='$b[kelas]'>
			<tr><td><input type='checkbox' value=$b[nis] name='pil[]'></td><td>$no</td><td>$b[nama]</td><td>$b[nis]</td><td>$b[kelas]</td></tr>";
			$no++;
			}

 echo "		 
		   
			</tbody>   
            </table>
		<div class='card-footer'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-cogs'></i> &nbsp Naik Kelas / Lulus
                        </button>
			</div>
			</form>
 		</div>
        </div> ";
?>