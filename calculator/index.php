<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<!-- membuat labeling dengan nama bilangan 1-->
	<label>Bilangan 1</label>
	<!-- membuat text field dengan nama bil1 -->
	<input type="text" name="bil1"><br>
	<!-- membuat labeling dengan nama bilangan 2 -->
	<label>Bilangan 2</label>
	<!-- membuat text field dengan nama bil2 -->
	<input type="text" name="bil2"><br>
	<!-- membuat tombol dengan nama hitung -->
	<input type="submit" name="hitung" value="Hitung">
</form>
</body>
</html>
<?php
error_reporting(0);
// membuat variable dan mengambil nilai dari form
$angka1=$_POST['bil1'];
$angka2=$_POST['bil2'];

// proses perhitungan
$tambah=$angka1+$angka2;
$kurang=$angka1-$angka2;
$kali=$angka1*$angka2;
$bagi=$angka1/$angka2;

// menampilkan hasil

echo $angka1." + ".$angka2." = ".$tambah."<br>";
echo $angka1." - ".$angka2." = ".$kurang."<br>";
echo $angka1." x ".$angka2." = ".$kali."<br>";
echo $angka1." : ".$angka2." = ".$bagi;

?>