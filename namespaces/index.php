<?php

/*	require_once 'api/Models/Persona.php';
	require_once 'api/Controllers/PersonasController.php';*/

	spl_autoload_register(function($clase){
		$ruta = "api/" . str_replace("\\", "/", $clase) . ".php";

		if(is_readable($ruta)) { //is_readable sirve para saber si el archivo es leible o existe
			require_once $ruta;
		}else{
			echo "el archivo no existe";
		}
	});	

	Models\Persona::Hola();
	Controllers\PersonasController::Hola();

?>