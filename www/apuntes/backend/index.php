<?php
	include_once("php/conexion.php");
	$query = "SELECT estado FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if (isset($_GET['borrado'])) {
		if ($_GET['borrado'] == "messageuno") {
			echo "<script>alert('Su solicitud eliminación de apunte fue enviada');</script>";
		}
		else{
			echo "<script>alert('Su solicitud eliminación de profesor fue enviada');</script>";
		}
	}
	if ($row['estado'] == 1) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Apuntes</title>
	<link rel="shortcut icon" type="image/x-icon" href="icon/favicon.ico">
	<link rel="stylesheet" href="assets/gral-rules.css">
	<link rel="stylesheet" href="assets/formulario.css">
	<link rel="stylesheet" href="assets/redirigir.css">
	<link rel="stylesheet" href="assets/fuentes.css">
	<link rel="stylesheet" href="assets/tabla.css">
	<link rel="stylesheet" href="assets/media-query.css">
	<link rel="stylesheet" href="assets/footer.css">
</head>
<body>
	<h2>Administrar</h2>
	<?php
		$query = "SELECT permiso FROM usuarios WHERE id_usuario=1";
		$consulta = $conexion -> query($query);
		$row = $consulta -> fetch_assoc();
		if ($row['permiso'] == 1) {
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
		include_once("templates/formulario.php");
		include_once("templates/tabla.php");
	?>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/admin-apuntes.js"></script>
	<script src="js/filtros.js"></script>
	<div class="unlogin">
		<a href="php/unlogin.php"><img src="icon/unlogin.png" alt="CERRAR SESIÓN"></a>
	</div>
	<?php include_once("templates/footer.html"); ?>
</body>
</html>
<?php
	}
	else{
		header("Location: inic_ses.php");
	}
?>