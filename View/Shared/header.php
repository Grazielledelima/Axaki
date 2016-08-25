<?php
//Se ABSPATH não estiver definido, volte para Home/Index
if ( ! defined('ABSPATH')) header("location:/?url=Home/Index");

//Caminho correto
$css = array(
	'bootstrap' => APP_PATH.'Public/Styles/bootstrap.min.css',
	'axaki' => APP_PATH.'Public/Styles/axaki.css'
);
$js = array(
	'bootstrap' => APP_PATH.'Public/Scripts/bootstrap.min.js',
	'jquery' => APP_PATH.'Public/Scripts/jquery-2.2.4.min.js',
	'axaki' => APP_PATH.'Public/Scripts/axaki.js'
);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		
		<title><?php echo $this->title; ?> - Axaki</title>
		<link rel="icon" type="image/ico" href="Public/Images/exploit.ico" />
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo $css['bootstrap']; ?>">
		<!-- esse só quando for hospedar
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		 -->
		<script src="<?php echo $js['jquery']; ?>"></script>
		
		<!-- Axaki -->
		<link rel="stylesheet" href="<?php echo $css['axaki']; ?>">
		<script src="<?php echo $js['axaki']; ?>"></script>
		
		<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
		<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	
<?php include "navbar.php"; ?>