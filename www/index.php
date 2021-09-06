<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="apuntes/backend/icon/favicon.ico" />
    <link rel="stylesheet" href="fonts/fonts_gral.css">
	<link rel="stylesheet" href="css/estilo-gral.css">
	<link rel="stylesheet" href="apuntes/frontend/css/estilos.css">
	<link rel="stylesheet" href="apuntes/frontend/librerias/select2/css/select2.css">
</head>
<body>
	<div class="todo">
		<div class="contenedor" id="contenedor">
			<h1>Sistema de Apuntes</h1>
			<div id="buscador"></div>
				<div id="select_din">
					<?php include_once("apuntes/frontend/componentes/filtros.php"); ?>
				</div>
			<div id="tabla"></div>
		</div>
	</div>
	<footer id="foot">
		<h4><a href="apuntes/backend/">Sistema Apuntes</a> Diseñado/Desarrollado por <a href="https://www.instagram.com/fernandomaldonado__/?hl=es" target="_blank">Fernando Luis Maldonado</a></h4>
		<h4>Todos los derechos reservados - 2018</h4>
	</footer>
	<script src="apuntes/frontend/js/jquery-3.3.1.min.js"></script>
	<script src="apuntes/frontend/librerias/select2/js/select2.js"></script>
	<script src="apuntes/frontend/js/filtros.js"></script>
	<script src="apuntes/frontend/js/carga_apuntes.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	    	$('#buscador').load('apuntes/frontend/componentes/buscador.php');
			$('#tabla').load('apuntes/frontend/componentes/tabla.php');
		});
	</script>
</body>
</html>