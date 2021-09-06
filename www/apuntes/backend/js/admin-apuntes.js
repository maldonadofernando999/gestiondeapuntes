'use strict';

(function() {
	function botonRedirigir()
	{
		let display = screen.width;
		let $botonAdminApuntes = document.querySelector('.boton-apuntes');
		let $botonAdminMaterias = document.querySelector('.boton-materias');
		let $botonAdminProfesores = document.querySelector('.boton-profesores');
		$botonAdminApuntes.onclick = function()
		{
			window.location = 'index.php';
		}
		$botonAdminProfesores.onclick = function()
		{
			window.location = 'pages/admin-profesores.php';
		}
		$botonAdminMaterias.onclick = function()
		{
			if(display > 800){
				window.location = 'pages/admin-materias.php';
			}
			else{
				window.location = 'pages/admin-materias-phone.php';
			}
		}
	}
	botonRedirigir();
})();