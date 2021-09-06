'use strict';

(function (){
	var $unlogin = document.querySelector('#login');
	$unlogin.onclick = function ()
	{
		window.location = 'php/unlogin.php';
	}
})();