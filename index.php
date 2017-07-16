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
			
			<div class="row" style="text-align: center;">
				<div class="col-md-12">
					<h2>Formulário de Login</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<form action="<?=$config['admin_url']?>logar" method="POST">
						<div style="position: relative; left: 45%;">
							<div class="input-group">
								<label>E-mail</label>
								<input type="text" name="email" class="form-control" required>	
							</div><br>

							<div class="input-group">
								<label for="">Senha</label>
								<input type="password" name="senha" class="form-control" required>	
							</div><br>

							<button type="submit" class="btn btn-primary">Logar!</button>
							<button type="reset" class="btn btn-danger">Limpar Campos!</button>

						</div>					
					</form>
				</div>
			</div>
		</div>
			
		<script src="assets/js/jquery-3.2.1.js"></script>
		<script src="assets/js/scripts.js"></script>

	</body>
</html>