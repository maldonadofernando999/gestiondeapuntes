<?php
	include("../componentes/conexion.php");
	$id_e = $_POST['id_e'];
	$id_a = $_POST['id_a'];
	if($id_e=="whatever" && $id_a=="whatever"){
		$sql_e="SELECT id_materia, anio, division, especialidad, materia FROM subjects ORDER BY anio, division, especialidad, materia ASC";
	}
	if($id_e!="whatever" && $id_a=="whatever"){
		$sql_e="SELECT id_materia, anio, division, especialidad, materia FROM subjects WHERE especialidad='$id_e' ORDER BY anio, division, especialidad, materia ASC";
	}
	if($id_e=="whatever" && $id_a!="whatever"){
		$sql_e="SELECT id_materia, anio, division, especialidad, materia FROM subjects WHERE anio='$id_a' ORDER BY anio, division, especialidad, materia ASC";
	}
	if($id_e!="whatever" && $id_a!="whatever"){
		$sql_e="SELECT id_materia, anio, division, especialidad, materia FROM subjects WHERE anio='$id_a' AND especialidad='$id_e' ORDER BY anio, division, especialidad, materia ASC";
	}
	$consulta_c=$conexion->query($sql_e);
	$html="<option selected value='whatever'>Seleccione Materia</option>";
	while($lineaC=$consulta_c->fetch_assoc()){
		$html.= "<option value='".$lineaC['id_materia']."'>".$lineaC['anio']."° ".$lineaC['division']."° ".$lineaC['especialidad']." - ".$lineaC['materia']."</option>";
	}
	echo $html;
?>