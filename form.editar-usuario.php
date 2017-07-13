<?php

	include('functions/core.php');

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// die;

	$nome = $db->real_escape_string($_POST['nome']);
	$papel = $db->real_escape_string($_POST['papel']);

	if($nome == "" || $papel == ""){
			header("Location: page.usuarios-listar.php?editar_usuario=false");
	}else{

		if($_POST['senha'] != ""){
			$senha = $db->real_escape_string($_POST['senha']);
			$db->query("UPDATE usuarios SET nome = '{$nome}', papel = '{$papel}', senha = '{$senha}', updated_at = NOW()") or die(mysqli_error($db));
		}else{
			$db->query("UPDATE usuarios SET nome = '{$nome}', papel = '{$papel}', updated_at = NOW()") or die(mysqli_error($db));
		}

		header("Location: page.usuarios-listar.php?editar_usuario=true");		

	}

?>