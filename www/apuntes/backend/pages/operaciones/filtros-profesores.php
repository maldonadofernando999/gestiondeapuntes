<?php
	include_once("../php/conexion.php");
	if(isset($_GET['criterio'])){
		$criterio = $_GET['criterio'];

		$query = "SELECT * FROM profesores ORDER BY $criterio ASC";
	}
	else{
		$query = "SELECT * FROM profesores";
	}
	$consulta = $conexion -> query($query);
?>