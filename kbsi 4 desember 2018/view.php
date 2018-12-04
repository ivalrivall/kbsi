<?php

include "koneksi.php";

$sql = "SELECT * FROM admin WHERE username='eva'";
$query = mysqli_query($koneksi, $sql);

foreach($query as $u){
	echo $u['username']."<br>";
	echo $u['password']."<br><br>";
}

?>