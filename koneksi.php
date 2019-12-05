<?php
	//koneksi database belajarkotlin
	$con = new mysqli("localhost", "root", "", "universitas_kotlin");
	//cek koneksi
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

		/*if (mysqli_connect_errno()){
			die("Connection failed: " . $con->connect_error);*/
	}
?>