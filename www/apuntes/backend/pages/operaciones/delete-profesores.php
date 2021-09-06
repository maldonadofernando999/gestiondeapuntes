<?php
	include_once("../../php/conexion.php");
	$query = "SELECT permiso FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if ($row['permiso'] == 1) {
		include_once("../../php/conexion.php");
		if (isset($_GET['id_eliminar'])) {
			$ide_eliminar = $_GET['id_eliminar'];
			$query = "DELETE FROM profesores WHERE id_profesor='$ide_eliminar'";
			$consulta = $conexion -> query($query);
		}
		header("Location: ../admin-profesores.php");
	}
	else{
		$de = "solicitud.borrado@colegio.edu.ar";
		$para = "colegio@gmail.com";
		$subject = "SOLICITUD DE BORRADO DE PROFESOR";
		$message = "SOLICITUD DE BORRADO DE PROFESOR\n\nID del archivo: ".$_GET['id_eliminar']."\nRecuerde que se deberá dirigir con la persona (vía mail personal o cualquier sea el medio) para corroborar que realmente hizo la solicitud\n\n1)INICIAR SESIÓN en APUNTES\n2)BORRAR el PROFESOR con el MISMO ID";
		$headers = "From:" . $de;
        mail($para,$subject,$message, $headers);
		header("Location: ../admin-profesores.php?borrado=messageuno");
	}
?>