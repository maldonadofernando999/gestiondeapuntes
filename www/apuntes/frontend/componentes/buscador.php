<?php 
	include("conexion.php");
	$sql="SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia FROM files 
        INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
        INNER JOIN subjects ON files.id_materia=subjects.id_materia ORDER BY id_archivo DESC  ";
	$result=mysqli_query($conexion,$sql);
?>
<select id="buscadorvivo">
	<option value="0">Buscar</option>
	<?php
		while($ver=mysqli_fetch_row($result)){ 
	?>
	<option value="<?php echo $ver[0] ?>">
		<?php
			$long = strlen($ver[1]);
			$count = $long-11;
			$acortar = substr($ver[1], -$count);
			echo $ver[2]." - ".$ver[3]." - ".$acortar;
		?>
	</option>
	<?php } ?>
</select>
<br><br><br>
<script type="text/javascript">
	$(document).ready(function(){
		$('#buscadorvivo').select2();
		$('#buscadorvivo').change(function(){
			$.ajax({
				type:"post",
				data:'valor=' + $('#buscadorvivo').val(),
				url:'apuntes/frontend/php/crearsession.php',
				success:function(r){
					$('#tabla').load('apuntes/frontend/componentes/tabla.php');
				}
			});
		});
	});
</script>