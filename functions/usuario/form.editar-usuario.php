<?php

	@session_start();

	include('../../core.php');

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// die;

	$id = $_POST['id'];

	$nome = $db->real_escape_string($_POST['nome']);
	$papel = $db->real_escape_string($_POST['papel']);

	if($nome == "" || $papel == ""){
			header("Location: {$config['admin_url']}usuarios?editar_usuario=false");
	}else{

		$usuario = new Usuario($db);
		$editar_usuario = $usuario->update($id, $_POST);

		if($editar_usuario == "true"){
			header("Location: {$config['admin_url']}usuarios?editar_usuario=true");		
		}else{
			header("Location: {$config['admin_url']}usuarios?editar_usuario=false");
		}

	}

?>