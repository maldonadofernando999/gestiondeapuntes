$(document).ready(function(){
	anio = $("#anio").val();
	$("#anio").change(function () {
		$('#select_especialidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
		$("#anio option:selected").each(function () {
			anio = $(this).val();
			$.post("operaciones/getEspecialidad.php", {anio: anio}, function(data){
				$("#select_especialidad").html(data);
			});
		});
	});
});