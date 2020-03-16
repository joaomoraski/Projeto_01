<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
}
?>

<html>
	<head>
		<title>Painel de controle</title>
		<meta charset="utf-8">
		<link href="<?php echo INCLUDE_PATH;  ?>estilo/all.css" rel="stylesheet"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/><!--Inicial para responsivo-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">

	</head>
	<body>
		<?php 
			//include('../config.php');
			if(Painel::logado() == false){
				echo '<h2 class="not-login">Você não esta logado!</h2>';
			}
	
		?>
		<div class="menu">
			<div class="menu-wraper">
			<div class="box-usuario">
				<?php
					if ($_SESSION['img'] == '') {
				 ?>
				<div class="avatar-usuario">
					<i class="fa fa-user"></i>
				</div><!--avatar-usuario-->
				<?php }else{ ?>
					<div class="imagem-usuario">
					<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>">
				</div><!--avatar-usuario-->
				<?php } ?>
				<div class="nome-usuario">
					<p><?php echo $_SESSION['nome']; ?></p>
					<p><?php echo pegaCargo($_SESSION['cargo']);?></p>
				</div><!-- nome-usuario -->
			</div><!-- box-usuario-->
			<div class="items-menu">
				<h2>Cadastro</h2>
				<a href="">Cadastrar Depoimento</a>
				<a href="">Cadastrar Serviço</a>
				<a href="">Cadastrar Slides</a>
				<h2>Gestão</h2>
				<a href="">Listar Depoimentos</a>
				<a href="">Listar Serviços</a>
				<a href="">Listar Slides</a>
				<h2>Administração do painel</h2>
				<a href="">Editar Usuário</a>
				<a href="">Adicionar Usuários</a>
				<h2>Configuração Geral</h2>
				<a href="">Editar</a>
			</div><!-- items-menu -->
			</div><!-- menu- wraper -->
		</div><!-- menu -->
		<header>
			<div class="center">
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div><!--menu-btn-->
				<div class="loggout">
					<a href="<?php echo INCLUDE_PATH_PAINEL?>?loggout"><i class="fa fa-window-close"></i><span>  Sair</span></a>
				</div><!-- Loggout -->
				<div class="clear"></div>
			</div><!-- Center -->
		</header>
		<div class="content">
			<?php $nomeEmpresa = "Moraski code"?>
			<div class="box-content left w100">
				<h2><i class="fa fa-home"></i>  Painel de Controle - <?php echo $nomeEmpresa ?></h2>
				
				<div class="box-metricas">
					<div class="box-metrica-single">
						<div class="box-metrica-wraper">
							<h2>Usuários Online</h2>
							<p>10</p>
						</div><!--box-metrica-wraper-->
					</div><!--box-metrica-single-->
					<div class="box-metrica-single">
						<div class="box-metrica-wraper">
							<h2>Total de Visitas</h2>
							<p>100</p>
						</div><!--box-metrica-wraper-->
					</div><!--box-metrica-single-->
					<div class="box-metrica-single">
						<div class="box-metrica-wraper">
							<h2>Visitas Hoje</h2>
							<p>3</p>
						</div><!--box-metrica-wraper-->
					</div><!--box-metrica-single-->
				</div><!--box-metrica-->
				<div class="clear"></div>

			</div><!--box-content-->
			

			<!--
			<div class="box-content left w100">
				
			</div>

			<div class="box-content left w50">
				
			</div>

			<div class="box-content right w50">
				
			</div>
			-->
			<div class="clear"></div>

		</div><!--Content-->



		<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
		<script src="<?php echo INCLUDE_PATH_PAINEL?>js/main.js"></script>
	</body>
</html>