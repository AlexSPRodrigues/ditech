<?php

	@session_start();
	
	include('../../core.php');

	$nome = $db->real_escape_string($_POST['nome']);

	if($nome == ""){
		header("Location: {$config['admin_url']}salas?cadastrar=false");
	}else{
		
		$sala = new Sala($db);
		$insere_sala = $sala->store($_POST);

		if($insere_sala == "true"){
			header("Location: {$config['admin_url']}salas?cadastrar=true");
		}else{
			header("Location: {$config['admin_url']}salas?cadastrar=false");
		}


	}

?>