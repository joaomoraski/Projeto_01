<?php

	$autoload = function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/Curso/Projeto_01/');//DIRETORIO RAIZ DO NOSSO SITE, DEFINIR CONSTANTE
	define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');//diretorio raiz pro painel

	//conectar com BD
	define('HOST', 'localhost');
	define('DATABASE', 'Projeto01');
	define('USER', 'root');
	define('PASSWORD', '');


	//Funções

	function pegaCargo($cargo){
		$arr = [
			'0' => "Normal",
			'1' => "Sub-administrador",
			'2' => "Administrador"
		];

		return $arr[$cargo];
	}
?>