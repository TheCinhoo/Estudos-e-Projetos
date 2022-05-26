<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>CentroCópias</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../CC/assets/css/estilos.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top navbar-right">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="../CC/assets/img/logo.png" class="logo"></a>
 			<ul class="nav navbar-nav">
						<li><a href="#">Empresa</a></li>
        		<li><a href="#">Serviços</a></li>
        		<li><a href="#">Pré-Impressão</a></li>
        		<li><a href="#">Dados Variáveis</a></li>
        		<li><a href="#">Eventos</a></li>
        		<li><a href="#">Design Gráfico</a></li>
        		<li><a href="#">Contato</a></li>
      </ul>
		</div>
	</nav>

	<div class="container">
		<img src="../CC/assets/img/cabeca.jpg" class="cabeca">
	</div>

	<div class="container conteudo">
		<h1><?php echo $titulo;?></h1>
		<p><?php echo $conteudo; ?></p>
	</div>


	<footer class="navbar-fixed-botom text-center">
		<p>CentroCópias - Todos os direitos reservados <?php echo date('Y'); ?></p>
	</footer>



	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>
</html>
