<?php
$db_host = 'localhost';
$db_user = 'wadahedu_ekotimo';
$db_pass = 'boboho220576';
$db_name = 'wadahedu_absen1'; 

$kon = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if (!$kon) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

?>