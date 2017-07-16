<?php

	include('../../core.php');

	$id = $db->real_escape_string($_POST['id']);
	$nome = $db->real_escape_string($_POST['nome']);
	
	if($nome == ""){
			header("Location: {$config['admin_url']}salas?editar=false");
	}else{
		
		$sala = new Sala($db);
		$editar_sala = $sala->update($id, $_POST);

		if($editar_sala == "true"){
			header("Location: {$config['admin_url']}salas?editar=true");		
		}else{
			header("Location: {$config['admin_url']}salas?editar=false");
		}




	}

?>