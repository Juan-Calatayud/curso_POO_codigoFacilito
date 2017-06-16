<?php

	interface Auto
	{
		public function encender();
		public function apagar();
	}

	interface Gasolina extends Auto
	{
		public function vaciarTanque();
		public function llenarTanque($cantidad);
	}

	class Deportivo implements Gasolina
	{

		private $estado = false;
		private $tanque = 0;

		public function estado(){
			if($this->estado){
				print "el auto está encendido y tiene ". $this->tanque . " de litros en el tanque <br>";
			}else{
				print "el auto está apagado <br>";
			}
		}

		public function encender(){
			if($this->estado){
				print "no puedes encender el auto dos veces <br>";
			}else{
				if($this->tanque <= 0){
					print "usted no puede encender el coche porque el deposito está vacio <br>";
				}else{
					print "auto encendido <br>";
					$this->estado = true;
				}
			}	
		}

		public function apagar(){
			if($this->estado){
				print "auto apagado <br>";
				$this->estado = false;
			}else{
				print "auto encendido <br>";
				//$this->estado = true;
			}
		}

		public function vaciarTanque(){
			$this->tanque = 0;
		}

		public function llenarTanque($cantidad){
			$this->tanque = $cantidad;
		}

		public function usar($km){
			if($this->estado){
				$reducir = $km / 3;
				$this->tanque = $this->tanque - $reducir;
				if($this->tanque <= 0){
					$this->estado = false;
				}
			}else{
				print "el auto está apagado y no se puede usar";
			}
		}
	}

	$obj = new Deportivo();
	$obj->llenarTanque(100);
	$obj->encender();
	$obj->usar(320);
	$obj->estado();


?>