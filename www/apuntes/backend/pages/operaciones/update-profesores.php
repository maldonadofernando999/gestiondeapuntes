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
			$query="UPDATE profesores SET profesor='$name' WHERE id_profesor='$id'";
			$sql=$conexion->query($query);
		}
		header("Location: ../admin-profesores.php");
	}
	else{
		header("Location: ../../index.php");
	}
?>