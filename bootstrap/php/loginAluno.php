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
					<li><a href="contato.php">CONTATO</a></li>
					<li class="active" class="page-scroll"><a href="login.php">LOGIN</a></li>
				</ul>
			</nav>
			<!-- Nav -->
			
		</div>
	</div>
	<!-- /Header -->
	
	<!-- contato -->
	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
				<h2 class="btn-sm label-primary">LOGIN</h2>
				<h4 class="text-muted">Digite o CPF, para ter acesso a area restrita.</h4>
				</div>
			</div>
			<br><br><br><br>
			<div>
				<div class="col-lg-12">
					<form method="POST" action="loginAluno.php">
						<div class="row ">
							<div class="col-center-block col-lg-4">
								<div class="form-group ">
								<label for="cpf">CPF:</label>
								<?php 
								if (isset($_POST['cpf'])){
									echo '<input type="text" class="form-control" placeholder="Seu CPF *" id="cpf" name="cpf" required data-validation-required-message="Por favor, digite seu CPF">
									<p class="help-block text-danger"></p>';			
								}else{
									$_POST['cpf'] = "";
									echo '<input type="text" class="form-control" placeholder="Seu CPF *" id="cpf" name="cpf" required data-validation-required-message="Por favor, digite seu CPF">
									<p class="help-block text-danger"></p>';
								}
								?>
								</div>
							</div>						
							<div class="col-lg-12 text-center">
							<br>
								<?php
								
								if (empty($_POST['submit'])){
									echo '<input type="submit" name="submit" class="btn-sm btn-primary"  value="LOGAR"><br><br>';
								}else{
									echo '<input type="submit" name="submit" class="btn-sm btn-primary"  value="LOGAR"><br><br>';
								}							
								?>
								
								<?php
								if(!empty($_POST['submit'])){
									
								}							
								?>
<?php
// Inclui o arquivo com o sistema de segurança
require_once("segurancaAluno.php");
// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Salva duas variáveis com o que foi digitado no formulário
  // Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
  $usuario = (isset($_POST['cpf'])) ? $_POST['cpf'] : '';
  // Utiliza uma função criada no seguranca.php pra validar os dados digitados
  if (validaUsuarioAluno($usuario) == true) {
    // O usuário e a senha digitados foram validados, manda pra página interna
    header("Location: consultaAluno.php");
  } else {
    // O usuário e/ou a senha são inválidos, manda de volta pro form de login
    // Para alterar o endereço da página de login, verifique o arquivo seguranca.php
	echo '<p class="btn-sm label-danger" align="center">Login e senha incorretos. Tente novamente.</p>';
	//expulsaVisitanteAluno();
  }
}	
?>								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
	</section>
	<br><br><br><br><br><br>
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