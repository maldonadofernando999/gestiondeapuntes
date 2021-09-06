<?php
	include_once("conexion.php");
	if (isset($_GET['estado']) && $_GET['estado'] == 1) {
		$estado = $_GET['estado'];
		$permiso = $_GET['permiso'];
		if ($_GET['permiso'] == 1) {
			$query = "UPDATE usuarios SET estado=$estado, permiso=$permiso WHERE id_usuario=1";
		}
		else {
			$query = "UPDATE usuarios SET estado=$estado, permiso=$permiso WHERE id_usuario=1";
		}
		$consulta = $conexion -> query($query);
		header("Location: ../index.php");
	}
	else{
		header("Location: ../inic_ses.html");
	}
?>