$(document).ready(function(){
	id_e = $("#especialidad").val();
	id_a = $("#anio").val();
	$.post("php/change_year.php", {id_e: id_e}, function(data){
		$("#anio").html(data);
	});
	$("#especialidad").change(function () {
		$('#select_materia').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
		$("#especialidad option:selected").each(function () {
			id_e= $(this).val();
			id_a= $("#anio").val();
			$.post("php/getMaterias.php", {id_e: id_e, id_a: id_a}, function(data){
				$("#select_materia").html(data);
			});            
		});
	});
	$("#especialidad").change(function () {
		$('#anio').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
		$("#especialidad option:selected").each(function () {
			id_e= $(this).val();
			$.post("php/change_year.php", {id_e: id_e}, function(data){
				$("#anio").html(data);
			});            
		});	
	});
	$("#anio").change(function () {
		$('#select_materia').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
		$("#anio option:selected").each(function () {
			id_a= $(this).val();
			id_e= $("#especialidad").val();
			$.post("php/getMaterias.php", {id_e: id_e, id_a: id_a}, function(data){
				$("#select_materia").html(data);
			});            
		});	
	});
});