'use strict';

(function (){
	var $login = document.querySelector('#btn');
	function login(paramUno, paramDos){
		let usuario = paramUno;
		let contraseña = paramDos;
		if(typeof usuario == 'string' && typeof contraseña == 'string')
		{
			let usuarioRealProfe = 'profe';
			let contraseñaRealProfe = 'profe';
			let usuarioRealAdmin = 'admin';
			let contraseñaRealAdmin = 'admin';
			if (usuario == usuarioRealProfe || usuario == usuarioRealAdmin)
			{
				if (contraseña == contraseñaRealProfe || contraseña == contraseñaRealAdmin)
				{
					if(usuario == usuarioRealProfe)
					{
						if (contraseña == contraseñaRealProfe)
						{
							window.location = 'php/login.php?estado=1&permiso=0';
						}
						else
						{
							alert("Contraseña incorrecta");
						}
					}
					else
					{
						if (contraseña == contraseñaRealAdmin)
						{
							window.location = 'php/login.php?estado=1&permiso=1';
						}
						else
						{
							alert("Contraseña incorrecta");
						}
					}
				}
				else
				{
					alert("Contraseña incorrecta");
				}
			}
			else
			{
				alert("Usuario incorrecto");
			}
		}
	}
	$login.onclick = function(){
		var user = document.getElementById('user').value;
		var pass = document.getElementById('pass').value;
		login(user, pass);
	}
})();