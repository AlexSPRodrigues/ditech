<?php

class Usuario{
	
	private $db;

	function __construct($db){
		$this->db = $db;
	}

	function getAll(){
		$retorno = array();

		$query = $this->db->query("SELECT * FROM usuarios");

		if($query->num_rows > 0){
			$i = 0;
			while($usuario = $query->fetch_assoc()){
				$retorno[$i] = $usuario;
				$i++;
			}
		}else{
			$retorno = NULL;
		}

		return $retorno;
	}

	function get($id){

		$retorno = array();

		$query = $this->db->query("SELECT * FROM usuarios WHERE id = {$id}");

		if($query->num_rows > 0){
			$retorno = $query->fetch_assoc();
		}else{
			$retorno = NULL;
		}

		return $retorno;
	}


}

?>