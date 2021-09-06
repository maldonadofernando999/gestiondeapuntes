<div class="contenedor-formulario">
	<h1>Ingresar Materia</h1>
	<form action="operaciones/insert-materias.php" method="POST" enctype="multipart/form-data">
		<input type="text" class="textt" name="name" placeholder="Nombre de la materia..." required>
		<select name="year" required id="anio">
			<option value="asd" selected>Seleccione Año</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
		</select>
		<div id="division-contenedor">
			<select name="division" id="select_division">
				<?php
					$html="<option selected value='asd'>Division - **Seleccione Año y División**</option>";
					$query="SELECT division FROM subjects ORDER BY division ASC";
					$consulta=$conexion->query($query);
					$temp= "";
					while($lineaC=$consulta->fetch_assoc()){
						if ($temp!=$lineaC['division']) {
							$temp=$lineaC['division'];
							$html.= "<option value='".$temp."'>".$temp."°</option>";
						}
					}
					$html.="<option value='otro'>Otro</option>";
					echo $html;
				?>
			</select>
		</div>
		<select name="especiality" required id="select_especialidad">
			<?php
				$html="<option selected value='asd'>Especialidad - **Primero seleccione Año**</option>";
				$html.="<option value='CBT'>CBT</option>";
				$html.="<option value='PROG'>PROG</option>";
				$html.="<option value='IPP'>IPP</option>";
				$html.="<option value='ADO'>ADO</option>";
				echo $html;
			?>
		</select>
		<select name="hours" required>
			<option value="" selected disabled>Seleccione Horas</option>
			<option value="72">72</option>
			<option value="108">108</option>
			<option value="144">144</option>
		</select>
		<input type="submit" name="subir" value="SUBIR">
	</form>
</div>