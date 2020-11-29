<html>
<head>
<meta name="robots" content="noindex,follow,noarchive" />

</head>
<body>
<?php
include "phpqrcode/qrlib.php";
include "../../system/koneksi.php";




$sqy=mysqli_query($kon, "select * from peserta ");
while($u=mysqli_fetch_array($sqy)){


QRcode::png("Hasil TOBK $u[nama] kelas $u[kelas] jurusan $u[jurusan]", "RAPORT $u[no_ujian].png", "L", 3, 3);

}

echo "<script>;window.location='../../admin.php?bagian=hasil'</script>";

?>
</body>
</html>
