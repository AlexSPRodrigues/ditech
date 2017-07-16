<? 
	include('core.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Desafio Técnico - Ditech</title>
	<link rel="stylesheet" href="<?=$config['admin_url']?>assets/css/reset.css">
	<link rel="stylesheet" href="<?=$config['admin_url']?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?=$config['admin_url']?>assets/css/style.css">
	<link rel="stylesheet" href="<?=$config['admin_url']?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

</head>
<body>
	<div class="container-fluid">
		<div class="row banner">
			<div class="col-md-12">
				<h1>DITECH - DESAFIO TÉCNICO</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2" style="border: 1px solid black;">
				<aside>
					<h2>Menu</h2>
						<ul>
							<li><a href="<?=$config['admin_url']?>dashboard">Home</a></li>
							
							<li>Usuários</a></li>
							<ul>
								<li><a href="<?=$config['admin_url']?>usuarios">Listar Usuários</a></li>
								<li><a href="<?=$config['admin_url']?>usuario/novo">Cadastrar Novo Usuário</a></li>
							</ul>

							<li>Salas</a></li>
							<ul>
								<li><a href="<?=$config['admin_url']?>salas">Listar Salas</a></li>
								<li><a href="<?=$config['admin_url']?>sala/novo">Cadastrar Nova Sala</a></li>
							</ul>
							
							<li><a href="">Reservar Sala</a></li>
							<li><a href="">Sair</a></li>	
							
						</ul>		
				</aside>
			</div>			
		<main>
			<div class="col-md-10"  style="border: 1px solid black;">