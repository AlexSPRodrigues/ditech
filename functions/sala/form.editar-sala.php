<?php

	include('functions/core.php');

	$id = $db->real_escape_string($_POST['id']);
	$nome = $db->real_escape_string($_POST['nome']);
	
	if($nome == ""){
			header("Location: page.listar-salas.php?editar=false");
	}else{
		$db->query("UPDATE salas SET salas.nome = '{$nome}', salas.created_at = NOW() WHERE salas.id = {$id}") or die(mysqli_error($db));
		header("Location: page.listar-salas.php?editar=true");

	}

?>