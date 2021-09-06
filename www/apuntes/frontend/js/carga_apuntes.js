$(document).ready(function(){
	especialidad = $("#especialidad").val();
	anio = $("#anio").val();
	materia = $("#select_materia").val();
	profesor = $("#select_profesor").val();
	$("#especialidad").change(function () {
		$('#div-apuntes').find('whatever').remove().end().val('whatever');
		$("#especialidad option:selected").each(function () {
			especialidad= $(this).val();
			anio = $("#anio").val();
			materia = $("#select_materia").val();
			profesor = $("#select_profesor").val();
			$.post("apuntes/frontend/php/getApuntes.php", {especialidad: especialidad, anio: anio, materia: materia, profesor: profesor}, function(data){
				$("#div-apuntes").html(data);
			});            
		});
	});
	$("#anio").change(function () {
		$('#div-apuntes').find('whatever').remove().end().val('whatever');
		$("#anio option:selected").each(function () {
			especialidad= $("#especialidad").val();
			anio = $(this).val();
			materia = $("#select_materia").val();
			profesor = $("#select_profesor").val();
			$.post("apuntes/frontend/php/getApuntes.php", {especialidad: especialidad, anio: anio, materia: materia, profesor: profesor}, function(data){
				$("#div-apuntes").html(data);
			});            
		});
	});
	$("#select_materia").change(function () {
		$('#div-apuntes').find('whatever').remove().end().val('whatever');
		$("#select_materia option:selected").each(function () {
			especialidad= $("#especialidad").val();
			anio = $("#anio").val();
			materia = $(this).val();
			profesor = $("#select_profesor").val();
			$.post("apuntes/frontend/php/getApuntes.php", {especialidad: especialidad, anio: anio, materia: materia, profesor: profesor}, function(data){
				$("#div-apuntes").html(data);
			});            
		});
	});
	$("#select_profesor").change(function () {
		$('#div-apuntes').find('whatever').remove().end().val('whatever');
		$("#select_profesor option:selected").each(function () {
			especialidad= $("#especialidad").val();
			anio = $("#anio").val();
			materia = $("#select_materia").val();
			profesor = $(this).val();
			$.post("apuntes/frontend/php/getApuntes.php", {especialidad: especialidad, anio: anio, materia: materia, profesor: profesor}, function(data){
				$("#div-apuntes").html(data);
			});            
		});
	});
});