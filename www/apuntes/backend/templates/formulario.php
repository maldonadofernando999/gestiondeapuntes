<?php include_once("php/conexion.php") ?>
<div class="contenedor-formulario">
	<h2>Ingresar Apunte</h2>
	<form action="php/subir.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="archivo" required="required">
		<br><br>
		<select id="especialidad">
			<option value="asd" selected>Seleccione Especialidad (FILTRO OPCIONAL)</option>
			<?php
				$query = "SELECT especialidad FROM subjects ORDER BY especialidad ASC";
				$consulta = $conexion -> query($query);
				$actual="";
				while ($row = $consulta -> fetch_assoc()) {
					if($actual!=$row['especialidad']){
						$actual=$row['especialidad'];
						?>
							<option value="<?php echo $row['especialidad'] ?>"><?php echo $row['especialidad'] ?></option>
						<?php
					}
				}
			?>
		</select>
		<br><br>
		<select id="anio">
		</select>
		<br><br>
		<select name="materia" id="select_materia" required="required">
			<?php
				$sql_e="SELECT id_materia, anio, division, especialidad, materia FROM subjects ORDER BY anio, division, especialidad, materia ASC";
				$consulta_c=$conexion->query($sql_e);
				$html="<option selected value='asd'>Seleccione Materia</option>";
				while($lineaC=$consulta_c->fetch_assoc()){
					$html.= "<option value='".$lineaC['id_materia']."'>".$lineaC['anio']."° ".$lineaC['division']."° ".$lineaC['especialidad']." - ".$lineaC['materia']."</option>";
				}
				echo $html;
			?>
		</select>
		<br><br>
		<select name="profesor" id="select_profesor" required="required">
			<option disabled selected>Seleccione Profesor</option>
		<?php
			include_once("php/conexion.php");
			$query = "SELECT id_profesor, profesor FROM profesores ORDER BY profesor";
			$consulta = $conexion -> query($query);
			while ($row = $consulta -> fetch_assoc()) {
				echo "<option value='".$row['id_profesor']."'>".$row['profesor']."</option>";
			}
		?>
		</select>
		<br><br>
		<input type="submit" name="subir" value="SUBIR">
	</form>
</div>