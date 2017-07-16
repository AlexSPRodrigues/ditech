<?php 

	class Autenticacao{
		private $db;

		function __construct($db){
			$this->db = $db;
		}

		function autenticao($request){
			var_dump($request);
			die;
		}


	}


?>