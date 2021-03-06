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
						<li><a href="cursos.php">CURSOS</a></li>						
						<li class="active" class="page-scroll"><a href="mensalidade.php">MENSALIDADE</a></li>
						<li><a href="inscricao.php">INSCRIÇÃO</a></li>
						<li><a href="contato.php">CONTATO</a></li>
						<li><a href="login.php">LOGIN</a></li>
					</ul>
				</nav>
				<!-- Nav -->
				
			</div>
		</div>
		<!-- Header -->
		
		<!-- incricao -->
		<section id="inscricao">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
				<h2 class="btn-sm label-primary">MENSALIDADE</h2>
				<h4 class="text-muted">Lista dos usuarios administradores.</h4>
				</div>
			</div>
		</div>

	<!-- tabela mensalidade -->
		<div class="container">
		<div class="row">
			<table class="table table-responsive"> 
			<thead class="btn-sm label-primary">
			<tr>
				<td><label>CURSO</label></td>
				<td><label>MENSALIDADE</label></td>
				<td><label>SEMESTRE</label></td>
			<tr>
			</thead>
			<tbody>
					<?php

require_once('conexao.php');
// Monta a consulta SQL para trazer as últimas logins ativas
$sql = "SELECT * FROM `cursos`";
// Executa a consulta OU mostra uma mensagem de erro
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
// Faz um loop, passando por todos os resultados encontrados
while ($login = $resultado->fetch_object()) {
  // Exibe a notícia dentro de um bloco HTML
 $x = $login->mensalidade * 6;
	echo 	'<tr>
				<td>' .$login->nome. '</td>
				<td> R$ ' .$login->mensalidade. ',00</td>
				<td> R$ '.$x.',00</td>
			</tr>';
} 
	echo '</tbody></table>';
	echo '<p class="btn-sm label-primary col-lg-12 " align="center">Registros encontrados: '.$resultado->num_rows.'</p>';
// while ($login = $resultado->fetch_object())
// Exibe o total de registros encontrados
// Libera o resultado para liberar memória
	$resultado->free();
?>
			</tbody>
			</table>
			</div>
			</div>
		</section>
		<!-- /tabela mensalidade -->
			
		<!-- Copyright -->
		<div id="copyright" class="container">
			Copyright © 2016 Faculdade Presidente Antônio Carlos de Conselheiro Lafaiete - (31) 3769-4000
		</div>
		<!-- Copyright -->
	</body>
</html>				