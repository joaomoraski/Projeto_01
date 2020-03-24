<?php include('config.php'); ?>
<?php Site::updateUsuariosOnline(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Projeto 01</title>
		<link href="<?php echo INCLUDE_PATH;  ?>estilo/all.css" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
		<link href="<?php echo INCLUDE_PATH;  ?>estilo/style.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/><!--Inicial para responsivo-->
		<meta name="keywords" content="palavras-chave,do,meu,site"/><!--Palavras chaves-->
		<meta name="description" content="Descrição do meu website"/><!--Saber descrição do site-->
		<link rel="icon" href="<?php echo INCLUDE_PATH ?>favicon.ico" type="image/x-icon">
		<meta charset="utf-8"/><!--Ajuda nos acentos-->
	</head>
	<body>
		<base base="<?php echo INCLUDE_PATH; ?>"/>
		<?php 

			$url = isset($_GET['url']) ? $_GET['url'] : 'home';
			switch ($url) {
				case 'sobre':
					echo '<target target="sobre"/>';
					break;
					
				case 'servicos':
					echo '<target target="servicos"/>';
					break;

			}

		 ?>

		<header>
			<div class="center">
				<div class="logo left"><a href='#'>Logomarca</a></div>
				<nav class="desktop right">
					<ul>
						<li><a href="<?php echo INCLUDE_PATH;  ?>Home">Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH;  ?>sobre">Sobre</a></li>
						<li><a href="<?php echo INCLUDE_PATH;  ?>servicos">Serviços</a></li>
						<li><a realtime="contato" href="<?php echo INCLUDE_PATH;  ?>contato">Contato</a></li>

					</ul>
				</nav>

				<nav class="mobile right">
					<div class="botao-menu-mobile">
						<i class="fas fa-bars"></i>
					</div>
					<ul>
						<li><a href="<?php echo INCLUDE_PATH;  ?>Home">Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH;  ?>sobre">Sobre</a></li>
						<li><a href="<?php echo INCLUDE_PATH;  ?>servicos">Serviços</a></li>
						<li><a realtime="contato" href="<?php echo INCLUDE_PATH;  ?>contato">Contato</a></li>
					</ul>
				</nav>
			<div class="clear"></div> 
			</div>
		</header>

		<div class="container-principal">
		<?php 
			if (file_exists('pages/'.$url.'.php')) {
				include('pages/'.$url.'.php');
			}else{
				//Podemos fazer o que quiser pq nao existe
				if ($url != 'sobre' && $url != 'servicos') {
					$pagina404 = true;
					include('pages/404.php');
				}else{
					include('pages/home.php');
				}
			}

		?>
		</div><!--container-principal-->


		<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?> > 
			<div class="center">
				<p>João Vitor Moraski Lunkes - Todos os direitos reservados</p>
			</div><!--center-->
		</footer><!--rodapé-->
		
		
		<script src="<?php echo INCLUDE_PATH;  ?>js/jquery.js"></script>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
		<script src="<?php echo INCLUDE_PATH;?>js/map.js"></script>
		<script src="<?php echo INCLUDE_PATH;  ?>js/scripts.js"></script>
		<?php 
			if ($url == 'home' || $url == '') {
				
		?>
		<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
		<?php } ?>

		<?php
			if ($url = 'contato') {
		?>

		<?php }?>


		<script src="<?php echo INCLUDE_PATH;?>js/exemplo.js"></script>
	</body>
</html>

