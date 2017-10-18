<!DOCTYPE HTML>
<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<html>
	<head>
		<title>UNIPAC LAFAIETE</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-panels.min.js"></script>
		<script src="../js/init.js"></script>		
		<script src="../js/inscricao.js"></script>
		<link rel="icon" href="../images/logo-fupac.ico">
		<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="../css/style.css" rel="stylesheet" media="screen">
		<noscript>
			<link rel="stylesheet" href="../css/skel-noscript.css" />
			<link rel="stylesheet" href="../css/style.css" />
			<link rel="stylesheet" href="../css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="../css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="../css/ie/v9.css" /><![endif]-->
		</head>
<body class="homepage">
	
	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Logo -->
			<div id="logo">
				<a href="../index.html">UNIPAC LAFAIETE</a>	
			</div>
			<!-- Logo -->
			
			<!-- Nav -->				
			<nav id="nav">
				<ul>
					<li  class="active" class="page-scroll"><a href="admin.php">INICIO</a></li>
					<li><a href="criar.php">CRIAR</a></li>
					<li><a href="modificar.php">MODIFICAR</a></li>
					<li><a href="consulta.php">CONSULTAR</a></li>
					<li><a href="deletar.php">DELETAR</a></li>
					<li><a href="logout.php">SAIR</a></li>
				</ul>
			</nav>
			<!-- Nav -->
			
		</div>
	</div>
	<!-- Header -->
	
	<!-- contato -->
	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
				<h2 class="btn-sm label-primary">
				<?php
					echo "Olá, " . $_SESSION['usuarioNome'] . "!";
				?>
				</h2>
				<h4 class="text-muted">Realize suas alterações com cuidado.</h4>
				<br><br>
				</div>
			</div>
			<br><br><br><br>
			<div class="col-lg-12 text-center">
				<ul>
					<li><a href="criar.php" class="btn btn-lg btn-primary">CRIAR</a>
					<a href="modificar.php" class="btn btn-lg btn-primary">MODIFICAR</a>
					<a href="consulta.php" class="btn btn-lg btn-primary">CONSULTAR</a>
					<a href="deletar.php" class="btn btn-lg btn-primary">DELETAR</a>
					<a href="logout.php" class="btn btn-lg btn-primary">SAIR</a></li>
				</ul>
			</div>
		</div>
	</section>
	<br><br><br><br><br><br><br>
	<!-- /Banner -->
	<div>
		<br><br>
	</div>
	<!-- Copyright -->
	<div id="copyright" class="container">
		Copyright © 2016 Faculdade Presidente Antônio Carlos de Conselheiro Lafaiete - (31) 3769-4000
	</div>
	<!-- Copyright -->
	
</body>
</html>				