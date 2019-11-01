	
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Gestão de Condomínios</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
	</head>
	<body>
		<div class="top">
			<div class="brand">
				<span><?php echo $viewData['residential_name']; ?></span>
			</div>		
			<div class="user_info">
				<div class="user_info">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Olá <?php echo $viewData['user_name']; ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#" style="color: black">Sua Conta</a>
						<a class="dropdown-item" href="#" style="color: black">Preferências</a>
						<a class="dropdown-item" href="<?php echo BASE_URL; ?>login/logout" style="color: black">Sair</a>
					</div>
				</div>
			</div>
		</div>
		<div class="menu">
			<div class="menu_mask">
			<img src="<?php echo BASE_URL; ?>assets/images/icons/user.png">
				<ul>
					<li><a href="<?php echo BASE_URL; ?>">Home</a></li>
					<li><a href="<?php echo BASE_URL; ?>residents">Moradores</a></li>
					<li><a href="#">Aluguel</a></li>
					<li><a href="#">Agenda</a></li>
					<li><a href="#">Assembléia</a></li>
					<li><a href="#">Ocorrências</a></li>
					<li><a href="#">Contratos</a></li>
					<li><a href="#">Meu Condomínio</a></li>
					<li><a href="#">Previsão de Visita</a></li>
					<li><a href="#">Documentos</li></a>
					<li><a href="#">2º Via de Boleto</a></li>
					<li><a href="#">FAQ</a></li>
				</ul>
			</div>
		</div>
		<div class="view_area">
			<?php $this->loadViewInTemplate($viewName, $viewData) ;?>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
	</html>