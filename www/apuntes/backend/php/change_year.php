<?php
	include_once("conexion.php");
	$id_e = $_POST['id_e'];
	$html = "<option value='asd' selected>Seleccione Año (FILTRO OPCIONAL)</option>";
	if($id_e == "asd"){
		$html .="<option value='1'>1 Año</option>";
		$html .="<option value='2'>2 Año</option>";
		$html .="<option value='3'>3 Año</option>";
		$html .="<option value='4'>4 Año</option>";
		$html .="<option value='5'>5 Año</option>";
		$html .="<option value='6'>6 Año</option>";
		$html .="<option value='7'>7 Año</option>";
	}
	if ($id_e == "CBT") {
		$html .="<option value='1'>1 Año</option>";
		$html .="<option value='2'>2 Año</option>";
		$html .="<option value='3'>3 Año</option>";
	}
	if ($id_e == "PROG" || $id_e== "IPP" || $id_e=="ADO") {
		$html .="<option value='4'>4 Año</option>";
		$html .="<option value='5'>5 Año</option>";
		$html .="<option value='6'>6 Año</option>";
		$html .="<option value='7'>7 Año</option>";
	}
	echo $html;
?>