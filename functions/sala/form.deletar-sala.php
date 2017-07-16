<?php

	include('../../core.php');

	$id = $db->real_escape_string($_GET['id']);
	
	if($id == ""){
			header("Location: {$config['admin_url']}salas?delete=false");
	}else{

		$sala = new Sala($db);
		$excluir_sala = $sala->delete($id);

		if($excluir_sala == "true"){
			header("Location: {$config['admin_url']}salas?delete=true");
		}else{
			header("Location: {$config['admin_url']}salas?delete=false");
		}


	}

?>