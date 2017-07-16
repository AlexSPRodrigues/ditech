<?php

	include('functions/core.php');

	$id = $db->real_escape_string($_GET['id']);
	
	if($id == ""){
			header("Location: page.listar-salas.php?delete=false");
	}else{
		$db->query("DELETE FROM salas WHERE salas.id = {$id}") or die(mysqli_error($db));
		header("Location: page.listar-salas.php?delete=true");

	}

?>