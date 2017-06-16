<?php

	abstract class Molde
	{
		abstract public function ingresarNombre($nombre);
		abstract public function obtenerNombre();

		public static function mensaje($mensaje){
			print $mensaje;
		}
	}

	class Persona extends Molde
	{
		private $mensaje = "Hola gente";
		private $nombre;

		public function mostrar(){
			print $this->mensaje;
		}

		public function ingresarNombre($nombre, $username = " jc"){
			$this->nombre = $nombre . "  " .$username;
		}

		public function obtenerNombre(){
			print $this->nombre;
		}
	}

	$obj = new Persona();
	$obj->mostrar();
	$obj->ingresarNombre("Juan", "Calatayud");
	$obj->obtenerNombre();

?>