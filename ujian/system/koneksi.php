<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'ujian'; 

$kon = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
mysqli_set_charset($kon, 'utf8');

if (!$kon) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}
?>
