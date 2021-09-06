<?php
session_start();
?>
<div class="lista-apuntes" id="div-apuntes">
<?php
	require_once "conexion.php";            
    if(isset($_SESSION['consulta']) && $_SESSION['consulta'] > 0){
		$idp=$_SESSION['consulta'];
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia
                FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia WHERE id_archivo='$idp' ORDER BY id_archivo DESC ";
	}
	else{
		$query="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
            INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
            INNER JOIN subjects ON files.id_materia=subjects.id_materia ORDER BY id_archivo DESC ";
	}
    $result = $conexion -> query($query);
    $html="";
	while($ver=mysqli_fetch_row($result)) {
		$html.="<div class='apuntes'>";
		$info = new SplFileInfo("../../backend/archivos/".$ver['1']);
		$long = strlen($ver[1]);//elimina caracteres sobrantes en el nombre del apunte
		$count = $long-11;
		$acortar = substr($ver[1], -$count);
		$var = $info->getExtension();//según la extensión del apunte le da una imagen
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
		$html.="<a href='apuntes/backend/archivos/".$ver['1']."' target='_blank'>
			".$acortar." - ".$ver['2']." - ".$ver['3']."</a>";
		$html.="</div>";
	}
	echo $html;
	session_unset();
?>
</div>