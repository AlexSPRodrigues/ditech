<?php

	@session_start();

	class ReservaSala{

		private $db;

		function __construct($db){
			$this->db = $db;
		}


		function getAll(){

			$retorno = array();
			$query = $this->db->query("SELECT reserva_salas.id AS id, usuarios.nome AS nome_usuario, salas.nome AS nome_sala, reserva_salas.data_reserva AS data_reserva, horarios.horario AS horario FROM reserva_salas INNER JOIN usuarios ON usuarios.id = reserva_salas.id_usuario INNER JOIN salas ON salas.id = reserva_salas.id_sala INNER JOIN horarios ON horarios.id = reserva_salas.id_horario");

			if($query->num_rows > 0){
				$i = 0;
				while($reserva = $query->fetch_assoc()){
					$retorno[$i] = $reserva;
					$i++;
				}
			}

			return $retorno;

		}

		function getReservaCliente($id){

			$retorno = array();
			$query = $this->db->query("SELECT reserva_salas.id AS id, usuarios.nome AS nome_usuario, salas.nome AS nome_sala, reserva_salas.data_reserva AS data_reserva, horarios.horario AS horario FROM reserva_salas INNER JOIN usuarios ON usuarios.id = reserva_salas.id_usuario INNER JOIN salas ON salas.id = reserva_salas.id_sala INNER JOIN horarios ON horarios.id = reserva_salas.id_horario WHERE reserva_salas.id_usuario = {$id}");

			if($query->num_rows > 0){
				$i = 0;
				while($reserva = $query->fetch_assoc()){
					$retorno[$i] = $reserva;
					$i++;
				}
			}

			return $retorno;

		}

		function store($request){

			$usuario = $this->db->real_escape_string($request['usuario']);
			$sala = $this->db->real_escape_string($request['sala']);
			$data_reserva = $this->db->real_escape_string($request['data_reserva']);
			$horario = $this->db->real_escape_string($request['horario']);
			
			$busca_reserva = $this->db->query("SELECT * FROM reserva_salas WHERE id_sala = {$sala} AND data_reserva = '{$data_reserva}' AND id_horario = {$horario}");

			if($busca_reserva->num_rows > 0){
				return "false";
			}else{

				$sql = "INSERT INTO reserva_salas(id_usuario, id_sala, data_reserva, id_horario) VALUES({$usuario}, {$sala}, '{$data_reserva}', {$horario})";

				if($this->db->query($sql)){
					return "true";
				}else{
					return "false";
				}

			}

		}

		function delete($id){

			$sql = "DELETE FROM reserva_salas WHERE id = {$id}";

			if($this->db->query($sql)){
				return "true";
			}else{
				return "false";
			}

		}



	
	}

?>
