<?php

	class Horario{

		function __construct($db){
			$this->db = $db;
		}

		function getAll(){

			$retorno = array();

			$query = $this->db->query("SELECT * FROM horarios");

			if($query->num_rows > 0){
				$i = 0;
				while($horario = $query->fetch_assoc()){
					$retorno[$i] = $horario;
					$i++;
				}
			}
			return $retorno;
		}
	}

?>