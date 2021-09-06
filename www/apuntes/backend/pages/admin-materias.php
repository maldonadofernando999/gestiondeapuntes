<?php
	include_once("../php/conexion.php");
	$query = "SELECT permiso FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if ($row['permiso'] == 1) {
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
	<div class="contenedor-redirigir adminn">
		<input type="button" value="Apuntes" class="boton-apuntes btn-red">
		<input type="button" value="Profesores" class="boton-profesores btn-red">
		<input type="button" value="Materias" class="boton-materias btn-red">
	</div>
	<?php
		include_once("../php/conexion.php");
		include_once("plantillas/admin-materias-form.php");
		include_once("plantillas/admin-materias-tabla.php");
	?>
	<?php include_once("../templates/footer.html") ?>
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/admin-volver.js"></script>
	<script src="js/division.js"></script>
	<script src="js/especialidad.js"></script>
	<div class="unlogin">
		<a href="../php/unlogin.php"><img src="../icon/unlogin.png" alt="CERRAR SESIÓN"></a>
	</div>
</body>
</html>
<?php
	}
	else{
		header("Location: ../index.php");
	}
?>