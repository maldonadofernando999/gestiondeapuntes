<?php
	include_once("../../php/conexion.php");
	$query = "SELECT estado FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if ($row['estado'] == 1) {
		include_once("../../php/conexion.php");
		if (isset($_POST['subir'])) {
			$name = $_POST['name'];
			$query = "INSERT INTO profesores (profesor) VALUES ('$name')";
			$consulta = $conexion -> query($query);
		}
		header("Location: ../admin-profesores.php");
	}
	else{
		header("Location: ../../index.php");
	}
?>