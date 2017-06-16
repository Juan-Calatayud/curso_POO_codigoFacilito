<?php

	class Persona
	{
		//atributos

		public $nombre = array();
		public $apellido = array();

		//metodos

		public function guardar($nombre, $apellido){
			
			$this->nombre[] = $nombre;
			$this->apellido[] = $apellido;

		}

		public function mostrar(){

			for($i = 0; $i < count($this->nombre); $i++){

				// self:: sirve para llamar a otro método dentro de un metodo, aqui por ejemplo llamo al método/función formato dentro del método/función mpstrar
				//self::formato($this->nombre[$i], $this->apellido[$i]);
				Persona::formato($this->nombre[$i], $this->apellido[$i]);

			}

		}

		public function formato($nombre, $apellido){
			echo "Nombre: " . $nombre . " | ". " Apellido: " . $apellido . "<br>";
		}
	}

	$persona = new Persona();
	$persona->guardar("Juan", "Calatayud");
	$persona->guardar("Carlos", "Fernandez");
	$persona->mostrar();


?>