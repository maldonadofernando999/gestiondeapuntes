<div class="contenedor-tabla">
	<table border="2">
		<tr>
			<td colspan="6" class="primer-td">ARCHIVOS</td>
		</tr>
		<tr class="no-hover">
			<td><a href="index.php?criterio=id_archivo">ID</a></td>
			<td><a href="index.php?criterio=archivo">Nombre</a></td>
			<td><a href="index.php?criterio=id_profesor">Profesor</a></td>
			<td><a href="index.php?criterio=id_materia">Materia</a></td>
			<td colspan="2">Operaciones</td>
		</tr>
		<?php
			include_once("php/conexion.php");
			$query ="
					SELECT files.id_archivo, files.archivo, profesores.profesor, subjects.materia
					FROM files
					INNER JOIN profesores ON files.id_profesor=profesores.id_profesor
					INNER JOIN subjects ON files.id_materia=subjects.id_materia
					";
			$consulta = $conexion -> query($query);
			while ($row = $consulta -> fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $row['id_archivo']; ?></td>
					<td class="err-text"><?php echo $row['archivo']; ?></td>
					<td><?php echo $row['profesor']; ?></td>
					<td><?php echo $row['materia']; ?></td>
					<td class="operaciones-center"><a href="php/eliminar.php?id_eliminar=<?php echo $row['id_archivo']; ?>"><img src="icon/trash.png" alt="Eliminar"></a></td>
					<td class="operaciones-center"><a href="archivos/<?php echo $row['archivo']; ?>"><img src="icon/download.png" alt="Descargar"></a></td>
				</tr>
				<?php
			}
		?>
	</table>
</div>