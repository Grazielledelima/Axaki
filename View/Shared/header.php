<?php
if ( ! defined('ABSPATH')) header("location:/?url=Home/Index");
$css = "/public/Styles/bootstrap.min.css";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		
		<title><?php //echo $this->title; ?> no Axaki</title>
		
		<!-- Bootstrap -->
		<link href="<?php echo $css; ?>" rel="stylesheet">
		<!-- esse só quando for hospedar
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		 -->
		<script src="/public/Scripts/jquery-2.2.4.min.js"></script>
		
		<!-- Axaki -->
		<link href="/public/Styles/axaki.css" rel="stylesheet">
		<script src="/public/Scripts/axaki.js"></script>
		
		<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
		<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
<?php include "navbar.php"; ?>