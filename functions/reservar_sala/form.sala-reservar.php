<?php

	include('../../core.php');

	if($_POST){

		if($_POST['usuario'] == "" || $_POST['sala'] == "" || $_POST['horario'] == ""){
			header("Location: {$config['admin_url']}reservas?cadastrar=false");
		}else{
	
			$reserva = new ReservaSala($db);
			$insere_reserva = $reserva->store($_POST);	

			if($insere_reserva == "true"){
				header("Location: {$config['admin_url']}reservas?cadastrar=true");
			}else{
				header("Location: {$config['admin_url']}reservas?cadastrar=false");
			}

		}

	}else{
		header("Location: {$config['admin_url']}reservas?cadastrar=false");
	}


?>