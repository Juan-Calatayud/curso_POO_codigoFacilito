<?php

	class Facebook
	{
		//atributos
		public $nombre;
		public $edad;
		private $pass; //contraseña

		//metodos
		public function __construct($nombre, $edad, $pass){
			$this->nombre = $nombre;
			$this->edad = $edad;
			$this->pass = $pass;
		}

		public function verInformacion(){
			echo "Nombre: " . $this->nombre . "<br>";
			echo "Edad: " . $this->edad . "<br>";
			self::cambiarPass("54321");
			echo "Contraseña: " . $this->pass . "<br>";
		}

		private function cambiarPass($pass){
			$this->pass = $pass;
		}
	}

	$facebook = new Facebook("Juan Calatayud", 34, "1234");
	//$facebook->pass;
	$facebook->verInformacion();
	//$facebook->cambiarPass("4321");

?>