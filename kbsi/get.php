<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
	<!-- membuat labeling...akan ditampilkan pada halaman -->
	<label>Nama</label>
	<!-- untuk membuat text field -->
	<input type="text" name="nama">
	<!-- membuat tombol -->
	<input type="submit" value="Kirim">
</form>

</body>
</html>

<?php
//menghilangkan error
error_reporting(0);
// deklarasi variable dan mengambil nilai dari form
$namasaya = $_GET['nama'];
// menampilkan nilai variable ke dalam halaman web
echo $namasaya;


?>