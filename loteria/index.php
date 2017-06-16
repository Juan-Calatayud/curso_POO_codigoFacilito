<?php

	class Loteria
	{
		//atributos

		public $numero;
		public $intentos;
		public $resultado = false;

		//métodos

		public function __construct($numero, $intentos){
			$this->numero = $numero;
			$this->intentos = $intentos;
		}

		public function sortear(){
			$minimo =  $this->numero / 2;
			$maximo =  $this->numero * 2;
			for ($i=0; $i < $this->intentos; $i++) {
				$intento = rand($minimo, $maximo); 
				self::intentos($intento);
			}
		}

		public function intentos($intento){
			if ($intento == $this->numero) {
				echo "<b>" . $intento . "==" . $this->numero . "</b><br>";
				$this->resultado = true;
			}else{
				echo $intento . " != " . $this->numero . "<br>" ;
			}
		}

		public function __destruct(){
			if ($this->resultado) {
				echo "Felicidades, has ganado en " . $this->intentos . " intentos. " ;
			}else{
				echo "Lo siento, has perdido en " . $this->intentos . " intentos. ";
			}
		}
	}

	$loteria = new Loteria(10, 10);
	$loteria->sortear();

?>