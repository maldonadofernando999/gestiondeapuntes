<?php
	include_once("conexion.php");
	$query = "SELECT estado, permiso FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if ($row['estado'] == 1) {
		include_once("conexion.php");
		if (isset($_GET['id_eliminar'])) {
			$ide_eliminar = $_GET['id_eliminar'];
			$query = "SELECT * FROM files WHERE id_archivo='$ide_eliminar'";
			$consulta = $conexion -> query($query);
			$consulta= $consulta->fetch_assoc();
			$borrar = $consulta['archivo'];
			if ($row['permiso'] == 1) {
				chmod('../archivos/'.$borrar, 0777);
				unlink('../archivos/'.$borrar);
				$query = "DELETE FROM files WHERE id_archivo='$ide_eliminar'";
				$consulta = $conexion -> query($query);
				header("Location: ../index.php");
			}
			else{
				$de = "solicitud.borrado@tecnica7.edu.ar";
				$para = "tecnica7jh@gmail.com";
				$subject = "SOLICITUD DE BORRADO DE ARCHIVO";
				$message = "SOLICITUD DE BORRADO DE ARCHIVO\n\nID del archivo: ".$_GET['id_eliminar']."\nRecuerde que se deberá dirigir con la persona (vía mail personal o cualquier sea el medio) para corroborar que realmente hizo la solicitud\n\n1)INICIAR SESIÓN en APUNTES\n2)BORRAR el ARCHIVO con el MISMO ID";
				$headers = "From:" . $de;
                mail($para,$subject,$message, $headers);
				header("Location: ../index.php?borrado=messageuno");
			}
		}
	}
	else{
		header("Location: ../inic_ses.html");
	}
?>