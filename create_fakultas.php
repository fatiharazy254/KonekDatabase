<?php
	include 'koneksi.php';

	$kodeFakultas = $_POST['kode_fakultas'];
	$namaFakultas = $_POST['nama_fakultas'];

	if(!$kodeFakultas || !$namaFakultas){
		echo json_encode(array('message'=>'requiered field is empty.'));
	}

	else{
		$query = mysqli_query($con, "INSERT INTO fakultas VALUES('','$kodeFakultas','$namaFakultas')");

		if ($query){
			echo json_encode(array('message'=>'fakultas data succesfully added.'));
		}
		else{
			echo json_encode(array('message'=>'fakultas data failed to add.'));
		}
	}
?>