<?php

	class Vehiculo
	{
		//atributos
		public $motorEncendido = false;
		public $marca;
		public $color;


		//metodos
		public function estado(){
			if($this->motorEncendido){
				echo "El motor esta encendido <br>";
			}else{
				echo "El motor esta apagado <br>";
			}
		}

		public function encender(){
			if ($this->motorEncendido) {
				echo "Cuidado, el motor ya está encendido <br>";
			}else{
				echo "El motor se está encendiendo <br>";
				$this->motorEncendido = true;
			}
		}
	}

	class Moto extends Vehiculo
	{
		public function estadoMoto(){
			$this->estado();
		}
	}

	/*$vehiculo = new Vehiculo();
	$vehiculo->estado();
	$vehiculo->encender();
	$vehiculo->estado();*/

	/*$moto = new Moto();
	$moto->estadoMoto();*/

	class CuatriMoto extends Moto
	{

	}

	$moto = new CuatriMoto();
	$moto->estado();

?>