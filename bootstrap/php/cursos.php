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
		<script src="../js/cursos.js"></script>
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
						<li class="active" class="page-scroll"><a href="cursos.php">CURSOS</a></li>						
						<li><a href="mensalidade.php">MENSALIDADE</a></li>
						<li><a href="inscricao.php">INSCRIÇÃO</a></li>
						<li><a href="contato.php">CONTATO</a></li>
						<li><a href="login.php">LOGIN</a></li>
					</ul>
				</nav>
				<!-- Nav -->
				
			</div>
		</div>
		<!-- /Header -->
		
		<!-- Cursos -->
		<div id="cursos">
			<div class="container">
			
				<!-- Administração -->
				<div id="adm">
					<a href="javascript:adm();"><h3>Administração</h3></a>
				</div>
				<div id="admC">
					<section style="font-size: 14pt;">

<?php

require_once('conexao.php');
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="1"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
?>
					</section>
				</div>
				
				<!-- Educação Física -->
				<div id="ef">
					<a href="javascript:ef();"><h3>Educação Física</h3></a>
				</div>
				<div id="efC">
					<section style="font-size: 14pt;">
 <?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="2"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';	
?> 
				</section>
				</div>
				
			<!-- Engenharia de Computação -->
				<div id="ec">
					<a href="javascript:ec();"><h3>Engenharia da Computação</h3></a>
				</div>
				<div id="ecC">
					<section style="font-size: 14pt;">
 <?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="3"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
 ?>
				</section>
				</div>
				
			<!-- Engenharia de Controle e Automação -->
				<div id="eca">
					<a href="javascript:eca();"><h3>Engenharia de Controle e Automação</h3></a>
				</div>
				<div id="ecaC">
					<section style="font-size: 14pt;">
<?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="4"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
 ?>
<br><br>
				</section>
				</div>	
				
			<!-- Engenharia de Produção -->
				<div id="epr">
					<a href="javascript:epr();"><h3>Engenharia de Produção</h3></a>
				</div>
				<div id="eprC">
					<section style="font-size: 14pt;">
<?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="5"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
?> 
<br><br>
					</section>
				</div>
				
			<!-- Engenharia de Minas -->
				<div id="emi">
					<a href="javascript:emi();"><h3>Engenharia de Minas</h3></a>
				</div>
				<div id="emiC">
					<section style="font-size: 14pt;">
<?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="6"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
?> 
<br><br>
					</section>
				</div>				
				
			<!-- Engenharia Mecânica -->
				<div id="eme">
					<a href="javascript:eme();"><h3>Engenharia Mecânica</h3></a>
				</div>
				<div id="emeC">
					<section style="font-size: 14pt;">
<?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="7"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
?> 
<br><br>
					</section>
				</div>	
			
			<!-- Engenharia de Segurança no Trabalho -->
				<div id="est">
					<a href="javascript:est();"><h3>Engenharia de Segurança no Trabalho</h3></a>
				</div>
				<div id="estC">
					<section style="font-size: 14pt;">
<?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="8"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
?> 
<br><br>
					</section>
				</div>	
			
			<!-- Engenharia Civil  -->
				<div id="eci">
					<a href="javascript:eci();"><h3>Engenharia Civil </h3></a>
				</div>
				<div id="eciC">
					<section style="font-size: 14pt;">
<?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="9"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
?> 
<br><br>
					</section>
				</div>	
							
			<!-- Pedagogia -->
				<div id="pe">
					<a href="javascript:pe();"><h3>Pedagogia</h3></a>
				</div>
				<div id="peC">
					<section style="font-size: 14pt;">
<?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="10"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
?> 
<br><br>
					</section>
				</div>	
							
			<!-- Medicina Veterinária -->
				<div id="mv">
					<a href="javascript:mv();"><h3>Medicina Veterinária</h3></a>
				</div>
				<div id="mvC">
					<section style="font-size: 14pt;">
<?php
$sql = 'SELECT * FROM `cursos` AS cursos WHERE id="11"';
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
	echo '<p><label>Resumo:</label><br> '.$login->resumo.'<br><br> 
		<label>Ato Autorizativo:</label><br>'.$login->autorizacao.'<br><br>
		<label>Duração:</label><br>'.$login->duracao.'<br><br>
		<label>Período:</label><br>'.$login->periodos.'<br><br>
		<label>Objetivo do Curso:</label><br>'.$login->objetivo.'<br><br>
		<label>Coordenação:</label><br>'.$login->coordenacao.'<br><br>	
		</p>';
?> 
<br><br>				
			</div>
		</div>
		<!-- /Cursos -->
		
		<br><br><br>
		
		<!-- Copyright -->
		<div id="copyright" class="container">
			Copyright © 2016 Faculdade Presidente Antônio Carlos de Conselheiro Lafaiete - (31) 3769-4000
		</div>
		<!-- Copyright -->
		
	</body>
</html>					
