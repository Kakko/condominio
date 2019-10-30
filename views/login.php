<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestão de Condomínios</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>
<body>
    <div class="bg_horta"></div>
    <div class="login_area">
        <img src="<?php echo BASE_URL; ?>assets/images/icons/cond.png">
        <div class="container">
            <form method="POST">
                <label for="login">E-mail:</label><br/>
                <input type="email" name="email" placeholder="Digite seu E-mail" id="input" autocomplete="off"><br/><br/>
                <label for="senha">Senha:</label><br/>
                <input type="password" name="password" placeholder="Digite sua Senha" id="input"><br/><br/><br/>
                <input type="submit" class="btn btn-success" value="Entrar">
            </form>
        </div>
    </div>


    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
</body>
</html>