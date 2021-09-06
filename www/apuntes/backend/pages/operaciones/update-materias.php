<?php
	include_once("../../php/conexion.php");
	$query = "SELECT permiso FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if ($row['permiso'] == 1) {
		include_once("../../php/conexion.php");
		if (isset($_POST['editar'])) {
			$id = $_POST['id_edit'];
			$name = $_POST['name_edit'];
			$year = $_POST['year_edit'];
			$division = $_POST['division_edit'];
			$especiality = $_POST['especiality_edit'];
			$hours = $_POST['hours_edit'];

			$query="UPDATE subjects SET materia='$name', anio='$year', division='$division', especialidad='$especiality', hours='$hours' WHERE id_materia='$id'";
			$sql=$conexion->query($query);
		}
		header("Location: ../admin-materias.php");}
	else{
		header("Location: ../../index.php");
	}
?>