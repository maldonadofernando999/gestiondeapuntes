<?php
	include_once("conexion.php");
	if(isset($_GET['criterio'])){
		$criterio = $_GET['criterio'];
		$query = "SELECT * FROM files ORDER BY $criterio ASC";
	}
	else{
		$query = "SELECT * FROM files";
	}
	$consulta = $conexion->query($query);
?>