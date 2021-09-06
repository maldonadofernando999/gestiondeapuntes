<?php
	include_once("../php/conexion.php");
	$query = "SELECT permiso FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if (isset($_GET['borrado'])) {
		if ($_GET['borrado'] == "messageuno") {
			echo "<script>alert('Su solicitud eliminación de profesor fue enviada');</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Apuntes</title>
	<link rel="shortcut icon" type="image/x-icon" href="../icon/favicon.ico">
	<link rel="stylesheet" href="../assets/gral-rules.css">
	<link rel="stylesheet" href="../assets/redirigir.css">
	<link rel="stylesheet" href="../assets/fuentes.css">
	<link rel="stylesheet" href="css/admin-materias.css">
	<link rel="stylesheet" href="../assets/media-query.css">
	<link rel="stylesheet" href="../assets/footer.css">
</head>
<body>
	<h2>Administrar</h2>
	<?php
		if ($row['permiso'] == 1){
		?>
			<div class="contenedor-redirigir adminn">
			<input type="button" value="Apuntes" class="boton-apuntes btn-red">
			<input type="button" value="Profesores" class="boton-profesores btn-red">
			<input type="button" value="Materias" class="boton-materias btn-red">
		</div>
		<?php
		}
		else{
		?>
			<div class="contenedor-redirigir adminn">
				<input type="button" value="Apuntes" class="boton-apuntes btn-red-ot">
				<input type="button" value="Profesores" class="boton-profesores btn-red-ot">
			</div>
		<?php
		}
		include_once("../php/conexion.php");
		include_once("plantillas/admin-profesores-form.php");
		include_once("plantillas/admin-profesores-tabla.php");
	?>
	<?php include_once("../templates/footer.html") ?>
	<script src="../js/admin-volver.js"></script>
	<div class="unlogin">
		<a href="../php/unlogin.php"><img src="../icon/unlogin.png" alt="CERRAR SESIÓN"></a>
	</div>
</body>
</html>