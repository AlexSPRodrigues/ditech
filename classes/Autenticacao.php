<?php 
	
	@session_start();
	
	class Autenticacao{
		private $db;

		function __construct($db){
			$this->db = $db;
		}

		function autenticao($request){
			
			$retorno = array();

			$email = $this->db->real_escape_string($request['email']);
			$senha = md5($this->db->real_escape_string($request['senha']));

			$query = $this->db->query("SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'");

			if($query->num_rows > 0){
				$retorno['situacao'] = "true";
				$retorno['usuario'] = $query->fetch_assoc();
			}else{
				$retorno['situacao'] = "false";
			}

			return $retorno;
		}

		function logout(){
			session_destroy();
			return "true";
		}

	}

?>