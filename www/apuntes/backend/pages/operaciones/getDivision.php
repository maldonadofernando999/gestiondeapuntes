<?php
	include("../../php/conexion.php");

	$anio = $_POST['anio'];
	$especialidad = $_POST['especialidad'];
	$html="<option selected value='asd'>Division - **Primero seleccione Año**</option>";
	if ($anio=="asd" && $especialidad=="asd") {
		$query="SELECT division FROM subjects ORDER BY division ASC";
	}
	elseif ($anio!="asd" && $especialidad=="asd") {
		$query="SELECT division FROM subjects WHERE anio='$anio' ORDER BY division ASC";
	}
	elseif ($anio=="asd" && $especialidad!="asd") {
		$query="SELECT division FROM subjects WHERE especialidad='$especialidad' ORDER BY division ASC";
	}
	elseif ($anio!="asd" && $especialidad!="asd") {
		$query="SELECT division FROM subjects WHERE anio='$anio' AND especialidad='$especialidad' ORDER BY division ASC";
	}
	$consulta=$conexion->query($query);
	$temp= "";
	if ($anio>=1 && $anio<=3) {
		$html.= "<option selected value='* (A-H)'>* (A-H)</option>";
	}
	else{
		while($lineaC=$consulta->fetch_assoc()){
			if ($temp!=$lineaC['division']) {
				$temp=$lineaC['division'];
				$html.= "<option value='".$temp."'>".$temp."°</option>";
			}
		}
	}
	$html.="<option value='otro'>Otro</option>";
	echo $html;
?>