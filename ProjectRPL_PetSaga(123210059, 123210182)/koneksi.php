<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "petsaga1";
	$konek=new mysqli($host,$user,$pass,$db);
	if ($konek->connect_error) {
   		die('Maaf koneksi gagal: '. $connect->connect_error);
	}	
?>