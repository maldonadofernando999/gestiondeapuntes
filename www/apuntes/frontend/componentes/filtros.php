<?php include_once("conexion.php"); ?>
<select id="especialidad">
	<option value="whatever" selected>Seleccione Especialidad </option>
	<?php
	$query = "SELECT DISTINCT especialidad FROM subjects ORDER BY especialidad ASC";
	$consulta = $conexion -> query($query);
	$actual="";
	while ($row = $consulta -> fetch_assoc()) {	
	?>
		<option value="<?php echo $row['especialidad'] ?>"><?php echo $row['especialidad'] ?></option>
	<?php
	}
	?>
</select>
<select id="anio" required></select>
<br><br>
<select name="materia" id="select_materia" required></select>
<select name="profesor" id="select_profesor" required>
	<option value="whatever" selected>Seleccione Profesor</option>
	<?php
	include_once("conexion.php");
	$query = "SELECT id_profesor, profesor FROM profesores ORDER BY profesor";
	$consulta = $conexion -> query($query);
	while ($row = $consulta -> fetch_assoc()) {
		echo "<option value='".$row['id_profesor']."'>".$row['profesor']."</option>";
	}
	?>
</select>
<br><br><br>
