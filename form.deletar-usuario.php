<?php

	include('functions/core.php');

	$id = $db->real_escape_string($_GET['id']);
	
	if($id == ""){
			header("Location: page.usuarios-listar.php?delete_usuario=false");
	}else{
		$db->query("DELETE FROM usuarios WHERE id = {$id}") or die(mysqli_error($db));
		header("Location: page.usuarios-listar.php?delete_usuario=true");

	}

?>