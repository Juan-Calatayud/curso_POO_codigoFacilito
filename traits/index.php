<?php

	trait Persona2
	{

		public $nombre;

		public function mostraNombre(){
			echo $this->nombre;
		}

		abstract function asignarNombre($nombre);

	}

	trait Trabajador
	{
		protected function mensaje(){
			echo " y soy un trabajador";
		}
	}

	class Persona
	{
		use Persona2, Trabajador;

		public function asignarNombre($nombre){
			$this->nombre = $nombre. self::mensaje();
		}
	}

	$persona = new Persona();
	$persona->asignarNombre("Juan");
	$persona->mostraNombre();



?>