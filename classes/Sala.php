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


	function store($request){

		$nome = $this->db->real_escape_string($request['nome']);
		$sql = "INSERT INTO salas(nome, created_at, updated_at) VALUES('{$nome}', NOW(), NOW())";

		if($this->db->query($sql)){
			return "true";
		}else{
			return "false";
		}
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


	function update($id, $request){

		$id = $this->db->real_escape_string($id);
		$nome = $this->db->real_escape_string($request['nome']);

		$sql = "UPDATE salas SET salas.nome = '{$nome}', salas.updated_at = NOW() WHERE salas.id = {$id}";

		if($this->db->query($sql)){
			return "true";
		}else{
			return "false";
		}


	}


	function delete($id){

		$sql = "DELETE FROM salas WHERE salas.id = {$id}";

		if($this->db->query($sql)){
			return "true";
		}else{
			return "false";
		}

	}


}

?>