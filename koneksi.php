<?php 

$koneksi = mysqli_connect("localhost","root","","databasePemira2022");

if (mysqli_connect_error()){
	echo "koneksi database gagal" .mysqli_connect_error();
}

?>