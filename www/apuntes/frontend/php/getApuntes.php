<?php
	include("../componentes/conexion.php");
	$especialidad = $_POST['especialidad'];
	$anio = $_POST['anio'];
	$materia = $_POST['materia'];
	$profesor = $_POST['profesor'];
	if ($especialidad != "whatever" && $anio == "whatever" && $materia == "whatever" && $profesor == "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE especialidad='$especialidad' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad == "whatever" && $anio != "whatever" && $materia == "whatever" && $profesor == "whatever") {
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE anio='$anio' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad == "whatever" && $anio == "whatever" && $materia != "whatever" && $profesor == "whatever") {
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE files.id_materia='$materia' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad == "whatever" && $anio == "whatever" && $materia == "whatever" && $profesor != "whatever") {
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE files.id_profesor='$profesor' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad != "whatever" && $anio != "whatever" && $materia == "whatever" && $profesor == "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE especialidad='$especialidad' AND anio='$anio' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad != "whatever" && $anio == "whatever" && $materia != "whatever" && $profesor == "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE especialidad='$especialidad' AND files.id_materia='$materia' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad != "whatever" && $anio == "whatever" && $materia == "whatever" && $profesor != "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE especialidad='$especialidad' AND files.id_profesor='$profesor' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad == "whatever" && $anio != "whatever" && $materia != "whatever" && $profesor == "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE files.id_materia='$materia' AND anio='$anio' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad == "whatever" && $anio != "whatever" && $materia == "whatever" && $profesor != "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE files.id_profesor='$profesor' AND anio='$anio' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad == "whatever" && $anio == "whatever" && $materia != "whatever" && $profesor != "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE files.id_profesor='$profesor' AND files.id_materia='$materia' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad == "whatever" && $anio != "whatever" && $materia != "whatever" && $profesor != "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE anio='$anio' AND files.id_materia='$materia' AND files.id_profesor='$profesor' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad != "whatever" && $anio == "whatever" && $materia != "whatever" && $profesor != "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE especialidad='$especialidad' AND files.id_materia='$materia' AND files.id_profesor='$profesor' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad != "whatever" && $anio != "whatever" && $materia == "whatever" && $profesor != "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE especialidad='$especialidad' AND anio='$anio' AND files.id_profesor='$profesor' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad != "whatever" && $anio != "whatever" && $materia != "whatever" && $profesor == "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia  WHERE anio='$anio' AND files.id_materia='$materia' AND especialidad='$especialidad' ORDER BY id_archivo DESC";
	}
	elseif ($especialidad != "whatever" && $anio != "whatever" && $materia != "whatever" && $profesor != "whatever"){
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia  WHERE especialidad='$especialidad' AND anio='$anio' AND files.id_materia='$materia' AND files.id_profesor='$profesor' ORDER BY id_archivo DESC";
            
	}
	elseif(isset($_SESSION['consulta']) && $_SESSION['consulta'] > 0){
		$idp=$_SESSION['consulta'];
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia
                FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia where id_archivo='$idp' ORDER BY id_archivo DESC";
	}
	else{
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia ORDER BY id_archivo DESC";
	}
	$result = $conexion -> query($query);
	$html="";
	$num = mysqli_num_rows($result);
	if ($num>0) {
		while($ver=mysqli_fetch_row($result)) {
			$html.="<div class='apuntes'>";
			$long = strlen($ver[1]);
			$count = $long-11;
			$acortar = substr($ver[1], -$count);
			$info = new SplFileInfo("../../backend/archivos/".$ver['1']);
			$var = $info->getExtension();
			$html.= "<img src='apuntes/frontend/images/";
			switch ($var) {
				case 'txt':
					$html.= "txt.png' alt='TXT'";
					break;
				case 'pdf':
					$html.= "pdf.png' alt='PDF'";
					break;
				case 'docx':
					$html.= "word.png' alt='WORD'";
					break;
				case 'doc':
					$html.= "word.png' alt='WORD'";
					break;
				case 'pptx':
					$html.= "powerpoint.png' alt='POWERPOINT'";
					break;
				case 'xlsx':
					$html.= "excel.png' alt='EXCEL'";
					break;
				case 'zip':
					$html.= "zip.png' alt='ZIP'";
					break;
				case 'rar':
					$html.= "rar.png' alt='RAR'";
					break;
				default:
					$html.= "unknow.png' alt='UNKNOW'";
					break;
			}
			$html.= ">";
			$html.="<a href='../../apuntes/backend/archivos/".$ver['1']."' target='_blank'>
				".$acortar." - ".$ver['2']." - ".$ver['3']."</a>";
			$html.="</div>";
		}
	}
	else{
		$html.="<p style='margin:0 auto;'>No se encontraron apuntes.</p>";
	}
	echo $html;
?>