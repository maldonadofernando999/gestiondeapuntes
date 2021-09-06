<div class="admin-tabla">
	<table border="2">
		<tr>
			<td colspan="5" class="primer-td">MATERIAS</td>
		</tr>
		<tr class="no-hover">
			<td><a href="admin-materias.php?criterio=id_materia">ID</a></td>
			<td><a href="admin-materias.php?criterio=materia">Nombre</a></td>
			<td>Curso</td>
			<td colspan="2">Operaciones</td>
		</tr>
		<?php
			include_once("../php/conexion.php");
			include_once("operaciones/filtros-materias.php");
			while ($row = $consulta -> fetch_assoc()) {
				if(isset($_GET['id_edit'])){
					if ($row['id_materia']==$_GET['id_edit']) {
				?>
					<tr>
					<form action="operaciones/update-materias.php" method="POST">
						<td><input type="hidden" name="id_edit" value="<?php echo $_GET['id_edit']; ?>"><?php echo $_GET['id_edit']; ?></td>
						<td><input type="text" name="name_edit" value="<?php echo $row['materia']; ?>"></td>
						<td style="width: 20%;"><?php echo $row['anio']."° ".$row['division']." ".$row['especialidad']; ?></td>
						<input style="display: none;" type="text" name="year_edit" class="limit-width" value="<?php echo $row['anio']; ?>">
						<input style="display: none;" type="text" maxlength="1" name="division_edit" value="<?php echo $row['division']; ?>">
						<input style="display: none;" type="text" name="especiality_edit" class="limit-width" value="<?php echo $row['especialidad']; ?>">
						<input style="display: none;" type="text" name="hours_edit" class="limit-width" value="<?php echo $row['hours']; ?>">
						<td class="operaciones-center"><input type="submit" value="OK" name="editar"></td>
						<td class="operaciones-center"><a href="operaciones/delete-materias.php?id_eliminar=<?php echo $row['id_materia']; ?>"><img src="../icon/trash.png" alt="Eliminar"></a></td>
					</form>
					</tr>
				<?php
						break;
					}
					else continue;
				}
				else{
				?>
					<tr>
						<td><?php echo $row['id_materia']; ?></td>
						<td><?php echo $row['materia']; ?></td>
						<td style="width: 20%;"><?php echo $row['anio']."° ".$row['division']." ".$row['especialidad']; ?></td>
						<td class="operaciones-center"><a href="admin-materias-phone.php?id_edit=<?php echo $row['id_materia']; ?>"><img src="../icon/update.png" alt="Editar"></a></td>
						<td class="operaciones-center"><a href="operaciones/delete-materias.php?id_eliminar=<?php echo $row['id_materia']; ?>"><img src="../icon/trash.png" alt="Eliminar"></a></td>
					</tr>
				<?php
				}
			}
		?>
	</table>
	<br>
	<p align="center" style="width: 80%; margin: 0 auto;">Para editar y/o ver los demas campos (Año / Division / Especialidad) deberá ingresar desde un dispositivo con pantalla mas grande</p>
</div>