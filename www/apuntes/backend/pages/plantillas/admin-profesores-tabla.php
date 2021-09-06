<div class="admin-tabla achicar">
	<table border="2">
		<tr>
			<td colspan="4" class="primer-td">PROFESORES</td>
		</tr>
		<tr class="no-hover">
			<td><a href="admin-profesores.php?criterio=id_profesor">ID</a></td>
			<td><a href="admin-profesores.php?criterio=profesor">Nombre</a></td>
			<td colspan="2">Operaciones</td>
		</tr>
		<?php
			include_once("../php/conexion.php");
			include_once("operaciones/filtros-profesores.php");
			while ($row = $consulta -> fetch_assoc()) {
				if(isset($_GET['id_edit'])){
					if ($row['id_profesor']==$_GET['id_edit']) {
				?>
					<tr>
					<form action="operaciones/update-profesores.php" method="POST">
						<td><input type="hidden" name="id_edit" value="<?php echo $_GET['id_edit']; ?>"><?php echo $_GET['id_edit']; ?></td>
						<td><input type="text" name="name_edit" value="<?php echo $row['profesor']; ?>"></td>
						<td class="operaciones-center"><input type="submit" value="OK" name="editar"></td>
						<td class="operaciones-center"><a href="operaciones/delete-profesores.php?id_eliminar=<?php echo $row['id_profesor']; ?>"><img src="../icon/trash.png" alt="Eliminar"></a></td>
					</form>
					</tr>
				<?php
					break;
					}
					else {continue;}
				}
				else{
				?>
					<tr>
						<td><?php echo $row['id_profesor']; ?></td>
						<td><?php echo $row['profesor']; ?></td>
						<td class="operaciones-center"><a href="admin-profesores.php?id_edit=<?php echo $row['id_profesor']; ?>"><img src="../icon/update.png" alt="Editar"></a></td>
						<td class="operaciones-center"><a href="operaciones/delete-profesores.php?id_eliminar=<?php echo $row['id_profesor']; ?>"><img src="../icon/trash.png" alt="Eliminar"></a></td>
					</tr>
				<?php
				}
			}
		?>
	</table>
</div>