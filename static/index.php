<?php
	
	class Pagina
	{
		//atributos
		public $nombre = "Juan Calatayud";
		public static $url = "www.juancalatayud.com";

		//metodos
		public function bienvenida(){
			echo "Bienvenidos a <b> " . $this->nombre . "</b> la pagina es <b> ". Pagina::$url . "</b><br>";
		}

		public static function bienvenida2(){
			echo "Bienvenidos a ". self::$url;
		}
	}


	class Web extends Pagina
	{

	}

	Web::bienvenida2()


?>