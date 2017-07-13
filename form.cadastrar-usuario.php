<?php

	include('functions/core.php');

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// die;

	$nome = $db->real_escape_string($_POST['nome']);
	$email = $db->real_escape_string($_POST['email']);
	$papel = $db->real_escape_string($_POST['papel']);
	$senha = md5($db->real_escape_string($_POST['senha']));

	if($nome == "" || $email == "" || $papel == "" || $senha == ""){
			header("Location: page.cadastrar-usuario.php?cadastrar_usuario=false");
	}else{

		$verifica_cliente = $db->query("SELECT * FROM usuarios WHERE email = '{$email}'");

		if($verifica_cliente->num_rows == 0){
			$db->query("INSERT INTO usuarios(nome, email, papel, senha, created_at, updated_at) VALUES('{$nome}', '{$email}', '{$papel}', '{$senha}', NOW(), NOW())") or die(mysqli_error($db));
			header("Location: page.cadastrar-usuario.php?cadastrar_usuario=true");
		}else{
			header("Location: page.cadastrar-usuario.php?cadastro_existente=true");
		}

		

	}

?>