<?php
	include_once("conexion.php");
	$query = "UPDATE usuarios SET estado=0, permiso=0 WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	header("Location: ../inic_ses.php");
?>