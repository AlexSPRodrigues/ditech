<?php

	include('../../core.php');

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// die;

	$nome = $db->real_escape_string($_POST['nome']);
	$email = $db->real_escape_string($_POST['email']);
	$papel = $db->real_escape_string($_POST['papel']);
	$senha = md5($db->real_escape_string($_POST['senha']));

	if($nome == "" || $email == "" || $papel == "" || $senha == ""){
		header("Location: {$config['admin_url']}usuarios?cadastrar_usuario=false");
	}else{

		$usuario = new Usuario($db);
		$insere_usuario = $usuario->store($_POST);

		if($insere_usuario == "true"){
			header("Location: {$config['admin_url']}usuarios?cadastrar_usuario=true");
		}else{
			header("Location: {$config['admin_url']}usuarios?cadastrar_usuario=false");
		}

	}

?>