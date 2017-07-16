<?php

	include('../../core.php');

	$id = $db->real_escape_string($_GET['id']);
	
	if($id == ""){
		header("Location: {$config['admin_url']}usuarios?delete_usuario=false");
	}else{
		
		$usuario = new Usuario($db);
		$delete_usuario = $usuario->delete($id);

		if($delete_usuario == "true"){
			header("Location: {$config['admin_url']}usuarios?delete_usuario=true");
		}else{	
			header("Location: {$config['admin_url']}usuarios?delete_usuario=false");
		}

	}

?>