<?php

	@session_start();

	$host = "127.0.0.1";
	$usuario = "root";
	$password = "";
	$database = "ditech";

	$db = new Mysqli($host, $usuario, $password, $database);

	if($db->connect_errno > 0){
	    die('Erro na conexão com o banco de dados [' . $db->connect_error . ']');
	}
	
	$db->set_charset("utf8");
?>