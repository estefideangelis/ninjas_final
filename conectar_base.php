<?php 
	class conexion{
			
		
		private $server = "localhost";
		private $user = "ucymxbzr_estefi";
		private $pass = "maimo!123";
		private $bbdd = "ucymxbzr_juego";
		public $conectado;

		/*private $server = "localhost";
		private $user = "c0140136_game";
		private $pass = "GEzegi51fe";
		private $bbdd = "c0140136_game";
		public $connected;*/
		
		function __construct(){
			$this->conectado = @mysqli_connect($this->server, $this->user, $this->pass, $this->bbdd);
			
		
		}
		

	}
?>