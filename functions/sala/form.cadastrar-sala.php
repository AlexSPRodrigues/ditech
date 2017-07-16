<?php

	include('functions/core.php');

	$nome = $db->real_escape_string($_POST['nome']);

	if($nome == ""){
			header("Location: page.cadastrar-sala.php?cadastrar=false");
	}else{
		$db->query("INSERT INTO salas(nome, created_at, updated_at) VALUES('{$nome}', NOW(), NOW())") or die(mysqli_error($db));
		header("Location: page.cadastrar-sala.php?cadastrar=true");

	}

?>