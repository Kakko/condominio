	
	
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
				<span><?php echo $viewData['build_name']; ?></span>
			</div>		
			<div class="user_info">
				<a href="" onclick="drop_menu()"><div id="userInfo">Olá <?php echo $viewData['user_name']; ?></div></a>
			</div>
			<div class="drop_menu_none">
				<ul>
					<li>Sua Conta</li>
					<li>Preferências</li>
					<li>Logout</li>
				</ul>
			</div>
		</div>
		<div class="menu">

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
	</html>