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
					<li><a href="admin.php">INICIO</a></li>
					<li><a href="criar.php">CRIAR</a></li>
					<li><a href="modificar.php">MODIFICAR</a></li>
					<li><a href="consulta.php">CONSULTAR</a></li>
					<li  class="active" class="page-scroll"><a href="deletar.php">DELETAR</a></li>
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
				<h2 class="btn-sm label-primary">DELETAR</h2>
				<?php
				if (!empty($_POST['submit'])){

				}else{
					echo '<h4 class="text-muted">Realize o login, para deletar usuario.</h4>';
				}
				?>
				</div>
			</div>
			<div>
				<div class="col-lg-12">
					<form method="POST" action="deletar.php">
						<div class="row ">
							<div class="col-center-block col-lg-4">
								
								<?php 
								if (isset($_POST['name'])){
		
								}else{
									$_POST['name'] = "";
									echo '<div class="form-group">
								<label for="name">LOGIN:</label>';
									echo '<input type="text" class="form-control" placeholder="Seu nome *" id="name" name="name" required data-validation-required-message="Por favor, digite seu nome">
									<p class="help-block text-danger"></p>';
								}
								?>
								</div>

								<?php 
								if (isset($_POST['senha'])){
							
								}else{
									$_POST['senha'] = "";
									echo '<label for="senha">SENHA:</label>
								<div class="form-group">';
									echo '<input type="password" class="form-control" placeholder="Sua senha *" id="senha" name="senha" required data-validation-required-message="Por favor, digite seu e-mail">
									<p class="help-block text-danger"></p>';
								}
								?>
								</div>
							</div>						
							<div class="col-lg-12 text-center">
							<br>
								<?php
								
								if (empty($_POST['submit'])){
									echo '<input type="submit" name="submit" class="btn-sm btn-primary"  value="DELETAR"><br><br>';
								}else{

								}							
								?>
				<?php
				require_once('conexao.php');
					$usuario = (isset($_POST['name'])) ? $_POST['name'] : '';
					$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
					if (!empty($_POST['submit'])){
						$sql = "DELETE 
								FROM login
								WHERE nome= '$usuario'";
						$inserir = $conexao->query($sql);
					}	
				?>	

		<?php
		if (!empty($_POST['submit'])){
			echo '<p class="btn-sm label-success" align="center">Usuario deletado com sucesso!</p>';
		}else{
			echo '<p class="btn-sm label-primary" align="center">Preencha os campos para criar um usuário que deseja deletar</p>';
		}	
		?>	
							</div>
							</div>
						</div>
					</form>
				</div>
			</div>
	</section>
	<br><br><br>
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