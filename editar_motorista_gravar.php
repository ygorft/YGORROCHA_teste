<?php 
	$strcon = mysqli_connect('127.0.0.1', 'root', null, 'teste');

	$status = $_REQUEST['statusMotorista'];
	$id = $_REQUEST['cpfMotorista'];

	$query = "UPDATE motoristas SET status_motorista='$status' WHERE cpf_motorista = '$id'";
	mysqli_query($strcon, $query) or die ($query."<br>".mysqli_error());
	header("Location: consultaMotorista.php");
?>