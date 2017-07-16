<?php

	@session_start();

	include('../../core.php');
	
	$autenticacao = new Autenticacao();
	$sair = $autenticacao->logout();

	if($sair == "true"){
		header("Location: {$config['admin_url']}");
	}else{
		header("Location: {$config['admin_url']}");
	}

?>