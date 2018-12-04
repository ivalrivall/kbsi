<?php	

$host = "localhost";
$user = "root";
$pass = "";
$database = "kbsi";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if(mysqli_connect_error()){
	echo "Gagal melakukan koneksi database : ".mysqli_connect_error();
}

?>