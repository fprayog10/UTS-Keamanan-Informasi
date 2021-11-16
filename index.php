<?php
$mysqli = mysqli_connect("localhost", "root", "", "keamanan_informasi");
if ($mysqli){
	echo " " . mysqli_connect_error();
}

$nama = "Firlan";
$password = "admin123";

$nama = $mysqli->real_escape_string($nama);
$password = $mysqli->real_escape_string($password);

$sql = "SELECT * FROM user WHERE nama='$nama' AND password='$password'";

if ($result = $mysqli->query($sql)){
	print_r($result->fetch_object());
}