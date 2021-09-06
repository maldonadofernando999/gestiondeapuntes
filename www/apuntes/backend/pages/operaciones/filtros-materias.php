<?php
	include_once("../php/conexion.php");
	if(isset($_GET['criterio'])){
		$criterio = $_GET['criterio'];
		$query = "SELECT * FROM subjects ORDER BY $criterio ASC";
	}
	else{
		$query = "SELECT * FROM subjects";
	}
	$consulta = $conexion -> query($query);
?>