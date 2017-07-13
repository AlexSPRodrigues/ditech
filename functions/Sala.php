<?php

class Sala{

	private $db;

	function __construct($db){
		$this->db = $db;
	}

	function getAll(){

		$retorno = array();
		$query = $this->db->query("SELECT salas.id, salas.nome FROM salas WHERE status = 1 ORDER BY id ASC");

		if($query->num_rows > 0){
			$i = 0;
			while($sala = $query->fetch_assoc()){
				$retorno[$i] = $sala;
				$i++;
			}
		}else{
			$retorno = NULL;
		}

		return $retorno;
	}

	function get($id){

		$retorno = array();
		$query = $this->db->query("SELECT salas.id, salas.nome FROM salas WHERE id = {$id}");

		if($query->num_rows > 0){
			$retorno = $query->fetch_assoc();
		}else{
			$retorno = NULL;
		}
		
		return $retorno;
	}

}

?>