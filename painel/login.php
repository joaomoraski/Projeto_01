<!DOCTYPE html>
<html>
	<head>
		<title>Painel de controle - Login</title>
		<meta charset="utf-8">
		<link href="<?php echo INCLUDE_PATH;  ?>estilo/all.css" rel="stylesheet"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/><!--Inicial para responsivo-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">

	</head>
	<body>
		<div class="box-login">
			<?php

				if (isset($_POST['acao'])) {
					$user = $_POST['user'];
					$password = $_POST['password'];
					$sql = MySql::connect()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? and password = ?");
					$sql->execute(array($user,$password));
					if ($sql->rowCount() == 1) {
						$info = $sql->fetch();
						//logamos com sucesso
						$_SESSION['login'] = true;
						$_SESSION['user'] = $user;
						$_SESSION['password'] = $password;
						$_SESSION['cargo'] = $info['cargo'];
						$_SESSION['nome'] = $info['nome'];
						$_SESSION['img'] = $info['img'];

						header('Location: '.INCLUDE_PATH_PAINEL);
						die();
					}else{
						//falhou
						echo '<div class="erro-box"><i class = "fa fa-times"></i> Usuário ou senha incorretos</div>';
					}
				}

			?>

			<h2>Efetue o Login:</h2>
			<form method="post">
				<input type="text" name="user" placeholder="Login..." required>
				<input type="password" name="password" placeholder="Password..." required>
				<input type="submit" name="acao" value="Enter!">
			</form>
		</div><!--box-login-->
	</body>
</html>