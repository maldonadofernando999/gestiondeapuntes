<?php
	include_once("php/conexion.php");
	$query = "SELECT estado FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if ($row['estado'] == 1) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>LOGIN</title>
	<link rel="shortcut icon" type="image/x-icon" href="icon/favicon.ico">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/fuentes.css">
	<link rel="stylesheet" href="assets/footer.css">
	<link rel="stylesheet" href="assets/login.css">
	<link rel="stylesheet" href="assets/footer-two.css">
</head>
<body>
	<div class="home">
		<a href="../../"><img src="icon/back.png" alt="HOME"></a>
	</div>
	<div class="formularios">
		<div id="menu">
			<h1>Iniciar Sesión</h1>
		</div>
		<div id="formulario_editar">
			<p class="arreglo">Correo Electrónico:</p>
			<div class="field-container">
				<i class="fa fa-envelope-o fa-lg"></i>
				<input type="text" class="field" id="user" placeholder="correo@electronico.com">
			</div>
			<p class="arreglod">Contraseña:</p>
			<div class="field-container">
				<i class="fa fa-key" id="asd"></i>
				<input type="password" class="field" id="pass" placeholder="********">
			</div>
			<p class="center-content">
				<input type="submit" id="btn" value="ENVIAR">
			</p>
		</div>
	</div>
	<?php include_once("templates/footer.html") ?>
	<script src="js/login.js"></script>
</body>
</html>