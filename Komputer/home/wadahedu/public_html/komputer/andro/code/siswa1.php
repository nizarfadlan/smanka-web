<html>
<head>
<meta name="robots" content="noindex,follow,noarchive" />

</head>
<body>
<?php
include "phpqrcode/qrlib.php";
include "../system/koneksi.php";




$sqy=mysqli_query($kon, "select * from siswa where no_ujian='$_GET[user]' ");
while($u=mysqli_fetch_array($sqy)){


QRcode::png("Bukti Daftar Ulang $u[nama] di SMAN 1 Sukorejo", "$u[no_ujian].png", "L", 3, 3);

}

echo "<script>;window.location='../selesai.php?65765ffjhvu68gig87guytyt&tsdysdg=$_GET[user]'</script>";

?>
</body>
</html>
