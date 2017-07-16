<?php

	include('../../core.php');

	if($_GET['id'] && $_GET['id'] != ""){

		$reserva = new ReservaSala($db);
		$excluir_reserva = $reserva->delete($_GET['id']);	

		if($excluir_reserva == "true"){
			header("Location: {$config['admin_url']}reservas?excluir=true");
		}else{
			header("Location: {$config['admin_url']}reservas?excluir=false");
		}

	}else{
		header("Location: {$config['admin_url']}reservas?excluir=false");
	}


?>