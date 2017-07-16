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


	function store($request){

		$nome = $this->db->real_escape_string($request['nome']);
		$email = $this->db->real_escape_string($request['email']);
		$papel = $this->db->real_escape_string($request['papel']);
		$senha = md5($this->db->real_escape_string($request['senha']));

		$verifica_cliente = $this->db->query("SELECT * FROM usuarios WHERE email = '{$email}'");

		if($verifica_cliente->num_rows == 0){
			$sql = "INSERT INTO usuarios(nome, email, papel, senha, created_at, updated_at) VALUES('{$nome}', '{$email}', '{$papel}', '{$senha}', NOW(), NOW())";
		
			if($this->db->query($sql)){
				return "true";
			}else{
				return "false";
			}

		}else{
			return "false";
		}

	}


	function update($id, $request){

		$nome = $this->db->real_escape_string($request['nome']);
		$email = $this->db->real_escape_string($request['email']);
		$papel = $this->db->real_escape_string($request['papel']);
		
		if($request['senha'] != ""){
			$senha = md5($this->db->real_escape_string($request['senha']));
			$sql = 	"UPDATE usuarios SET nome = '{$nome}', papel = '{$papel}', senha = '{$senha}', updated_at = NOW() WHERE id = {$id}";		
		}else{
			$sql = "UPDATE usuarios SET nome = '{$nome}', papel = '{$papel}', updated_at = NOW() WHERE id = {$id}";
		}

		if($this->db->query($sql)){
			return "true";
		}else{
			return "false";
		}

	}

	function delete($id){

		$sql = "DELETE FROM usuarios WHERE id = {$id}";

		if($this->db->query($sql)){
			return "true";
		}else{
			return "false";
		}

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