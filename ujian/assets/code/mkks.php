<html>
<head>
<meta name="robots" content="noindex,follow,noarchive" />

</head>
<body>
<?php
include "phpqrcode/qrlib.php";
include "../../system/koneksi.php";




$sqy=mysqli_query($kon, "select * from admin ");
$u=mysqli_fetch_array($sqy);


QRcode::png("Hasil ujian $u[nama_sekolah] dengan kepala sekolah $u[kepala_sekolah] $u[nip]", "laporan.png", "L", 2, 2);



echo "<script>self.close();</script>";

?>
</body>
</html>
