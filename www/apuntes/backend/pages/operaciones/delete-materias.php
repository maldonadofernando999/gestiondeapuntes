<?php
	include_once("../../php/conexion.php");
	$query = "SELECT permiso FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if ($row['permiso'] == 1) {
		include_once("../../php/conexion.php");
		if (isset($_GET['id_eliminar'])) {
			$ide_eliminar = $_GET['id_eliminar'];
			$query = "DELETE FROM subjects WHERE id_materia='$ide_eliminar'";
			$consulta = $conexion -> query($query);
		}
		header("Location: ../admin-materias.php");
	}
	else{
		header("Location: ../../index.php");
	}
?>