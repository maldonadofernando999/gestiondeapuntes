$(document).ready(function(){
	anio = $("#anio").val();
	especialidad = $("#select_especialidad").val();
	$("#anio").change(function () {
		$('#select_division').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
		$("#anio option:selected").each(function () {
			anio= $(this).val();
			especialidad = $("#select_especialidad").val();
			$.post("operaciones/getDivision.php", {anio: anio, especialidad: especialidad}, function(data){
				$("#select_division").html(data);
			});
		});
	});
	$("#select_especialidad").change(function () {
		$('#select_division').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
		$("#select_especialidad option:selected").each(function () {
			especialidad = $(this).val();
			anio = $("#anio").val();
			$.post("operaciones/getDivision.php", {anio: anio, especialidad: especialidad}, function(data){
				$("#select_division").html(data);
			});
		});
	});
	$("#select_division").change(function () {
		division = $(this).val();
		if (division == "otro") {
			$("#division-contenedor").html("<input class='textt' type='text' name='division' placeholder='Division...'>");
		}
	});
});