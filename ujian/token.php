<?php

include "system/koneksi.php";
$tok=mysqli_query($kon, "select * from ijin where id_token='token123' ");
$jattu=mysqli_fetch_array($tok);

echo "

  <link rel='stylesheet' href='css/bootstrap.css'>
  <link rel='stylesheet' href='css/proktor.css'>
<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script> 	
	
 <link rel='stylesheet' href='css/font-awesome.min.css'>	
<link rel='stylesheet' href='assets/css/lib/datatable/dataTables.bootstrap.min.css'>
 <div class='content mt-3'>
           
                <div class='row'>

            <div class='col-sm-12'>
                
                 <div class='card'>
                      <div class='card-header'>
                        <strong>Token  &nbsp;  &nbsp;  &nbsp;  &nbsp; </strong>
                      
					 
					  
					  
					  </div>
					  
							  
					  
					  
					  
					  
					  
					  
                      <div class='card-body card-block'>
			
	
	
	
	<div class='syifa'> $jattu[token]</div>
					  
					  
			         
                    </div>

        </div>
    </div>
	</div>
	</div></div>
	
	<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 
	";
	






?>