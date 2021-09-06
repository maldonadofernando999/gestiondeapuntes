<?php
	include("../../php/conexion.php");

	$anio = $_POST['anio'];
	switch ($anio) {
		case 1:
		case 2:
		case 3:
			$html="<option selected value='CBT'>CBT</option>";
			break;
		case 4:
		case 5:
		case 6:
		case 7:
			$html="<option selected value='asd'>Seleccione Especialidad</option>";
			$html.="<option value='PROG'>PROG</option>";
			$html.="<option value='IPP'>IPP</option>";
			$html.="<option value='ADO'>ADO</option>";
			break;
		default:
			$html="<option selected value='asd'>Especialidad - **Primero seleccione Año**</option>";
			break;
	}
	echo $html;
?>