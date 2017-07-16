<?php

	@session_start();

	include('../../core.php');

	if($_POST){

		$email = $_POST['email'];
		$senha = $_POST['senha'];

		if($email == "" || $senha == "" ){
			header("Location: {$config['admin_url']}");
		}else{

			$autenticacao = new Autenticacao($db);
			$logar = $autenticacao->autenticao($_POST);

			if($logar['situacao'] == "true"){
				
				session_start();
				$_SESSION['id'] = $logar['usuario']['id'];
				$_SESSION['nome'] = $logar['usuario']['nome'];
				$_SESSION['papel'] = $logar['usuario']['papel'];
				header("Location: {$config['admin_url']}dashboard");
			
			}else{
				session_destroy();
				header("Location: {$config['admin_url']}");
			}

		}
	}else{
		header("Location: {$config['admin_url']}");
	}


?>