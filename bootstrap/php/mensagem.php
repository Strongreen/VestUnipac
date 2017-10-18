<!DOCTYPE HTML>
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
			
			<!-- Logo-picture -->
			<div id="pict">
				<a href="../index.html"><img src="../images/FUPAC.png"></a>	
			</div>
			<!-- Logo-picture -->
			
			<!-- Logo -->
			<div id="logo">
				<a href="../index.html">UNIPAC LAFAIETE</a>	
			</div>
			<!-- Logo -->
			
			<!-- Nav -->				
			<nav id="nav">
				<ul>
					<li><a href="../index.html">INICIO</a></li>
					<li><a href="../cursos.html">CURSOS</a></li>
						<li><a href="../mensalidade.html">MENSALIDADE</a></li>
					<li><a href="inscricao.php">INSCRIÇÃO</a></li>
					<li class="active" class="page-scroll"><a href="contato.php">CONTATO</a></li>
					<li><a href="login.php">LOGIN</a></li>
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
				<h2 class="btn-sm label-primary">Entre em contato:</h2>
				<h4 class="text-muted">Deixe suas dicas, sugestões e relamações</h4>
				<br><br>
				</div>
			</div>
			<div>
				<div class="col-lg-12">
					<form method="POST" action="mensagem.php" onSubmit="return enviarContato();">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<?php 
								if (isset($_POST['name'])){
												
								}else{
									$_POST['name'] = "";
									echo '<input type="text" class="form-control" placeholder="Seu nome *" id="name" name="name" required data-validation-required-message="Por favor, digite seu nome">
									<p class="help-block text-danger"></p>';
								}
								$nome = $_POST['name'];
								?>
								</div>
								<div class="form-group">
								<?php 
								if (isset($_POST['email'])){
																		
								}else{
									$_POST['email'] = "";
									echo '<input type="email" class="form-control" placeholder="Seu Email *" id="email" name="email" required data-validation-required-message="Por favor, digite seu e-mail">
									<p class="help-block text-danger"></p>';
								}
								$email = $_POST['email'];							
								?>
								</div>
								<div class="form-group">
								<?php 
								if (isset($_POST['usrtel'])){
																	
								}else{
									$_POST['usrtel'] = "";
									echo '<input type="usrtel" class="form-control" placeholder="Seu Telefone *" id="usrtel" name="usrtel" required data-validation-required-message="Por favor, digite seu telefone">
									<p class="help-block text-danger"></p>';
								}
								$celular = $_POST['usrtel'];
								?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<?php 
								if (isset($_POST['mensagem'])) {
									
								}else{
									$_POST['mensagem'] = "";
									echo '<textarea class="form-control" placeholder="Sua Mensagem *" id="mensagem" name="mensagem" required data-validation-required-message="Por favor, digite a mensagem" style="height: 142px;"></textarea>
									<p class="help-block text-danger"></p>';
								}
								$mensage = $_POST['mensagem'];
								?>
								</div>
							</div>							
							<div class="clearfix"></div>
							<div class="col-lg-12 text-center">
							<br><br>
								<div id="success"></div>
							<?php
							if (empty($_POST['submit'])){
								echo '<input type="submit" name="submit" class="btn-sm btn-primary"  value="ENVIAR MENSAGEM">';
							}
							?>	
						<?php
						if (!empty($nome) || !empty($email) || !empty($celular) || !empty($mensage)){
							require_once('conexao.php');			
							$sql = "insert into contato (name, email, celular, mensagem) values ('$nome', '$email', '$celular', '$mensage')";
							$inserir = $conexao->query($sql);
						}							
						?>	
						<?php
						if (!empty($_POST['submit'])){
							echo '<br><br><p class="btn-sm label-success" align="center">Sua mensagem foi enviada com sucesso!</p>';
						}	
						?>									
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<br><br><br><br>
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