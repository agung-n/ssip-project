<?php
$host = "localhost"; // server
$user = "root"; // username
$pass = ""; // password
$database = "sundaypr_ssip"; // nama database
 
$connection = mysqli_connect($host, $user, $pass, $database); // menggunakan mysqli_connect
 
if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
	echo 'Connection Failed : '.mysqli_connect_error(); // pesan ketika koneksi database error
}
?>