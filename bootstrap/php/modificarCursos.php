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
					<li class="active" class="page-scroll"><a href="modificar.php">MODIFICAR</a></li>
					<li><a href="consulta.php">CONSULTAR</a></li>
					<li><a href="deletar.php">DELETAR</a></li>
					<li><a href="logout.php">SAIR</a></li>
				</ul>
			</nav>
				<!-- Nav -->
				
			</div>
		</div>
		<!-- /Header -->
		
		<!-- incricao -->
		<div id="inscricao">
			<div class="container">
				<h2 class="btn-sm label-primary">Preencha os dados:</h2>
				<fieldset>
                <form method="POST" action="modificarCursos.php" id="dados" onSubmit="return enviardados();">
                    <table class="table table-responsive">
<?php
require_once('conexao.php');
$sql = "SELECT * FROM `cursos` AS cursos WHERE id= '$_REQUEST[id]'";
$resultado = $conexao->query($sql) OR trigger_error($conexao->error, E_USER_ERROR);
$login = $resultado->fetch_object();
?>					
                        <tbody>
                            <tr>           
                                <td><label for="name">Nome do curso:</label></td>
                                <td>
								<?php 
								if (isset($_POST['nome'])){
									echo $_POST['nome'];									
								}else{
									$_POST['nome'] = "$login->nome";
									echo '<input type="text" class="form-control" name="nome" value="'.$login->nome.'" placeholder="Digite o nome do curso" />';
								}									
									$nome = $_POST['nome'];
								?></td>
                            </tr>
							<tr>           
                                <td><label for="cidade">Resumo:</label></td>
                                <td>
								<?php 
								if (isset($_POST['resumo'])){
									echo $_POST['resumo'];									
								}else{
									$_POST['resumo'] = "$login->resumo";
									echo '<textarea style="height:142px" type="text" class="form-control" name="resumo" placeholder="Descreva o curso" />'.$login->resumo.'</textarea>';
								}
									$resumo = $_POST['resumo'];								
								?></td>
                            </tr>
							<tr>           
                                <td><label for="cidade">Autorização:</label></td>
                                <td>
								<?php 
								if (isset($_POST['autorizacao'])){
									echo $_POST['autorizacao'];									
								}else{
									$_POST['autorizacao'] = "$login->autorizacao";
									echo '<input type="text" class="form-control" name="autorizacao" value="'.$login->autorizacao.'" placeholder="Digite a autorização do curso" />';
								}
									$autorizacao = $_POST['autorizacao'];								
								?></td>
                            </tr>
							<tr>           
                                <td><label for="cidade">Duração:</label></td>
                                <td>
								<?php 
								if (isset($_POST['duracao'])){
									echo $_POST['duracao'];									
								}else{
									$_POST['duracao'] = "$login->duracao";
									echo '<input type="text" class="form-control" name="duracao" value="'.$login->duracao.'" placeholder="Digite a duracao do curso" />';
								}
									$duracao = $_POST['duracao'];								
								?></td>
                            </tr>
							<tr>           
                                <td><label for="cidade">Periodos:</label></td>
                                <td>
								<?php 
								if (isset($_POST['periodos'])){
									echo $_POST['periodos'];									
								}else{
									$_POST['periodos'] = "$login->periodos";
									echo '<input type="text" class="form-control" name="periodos" value="'.$login->periodos.'" placeholder="Digite a qte de periodos do curso" />';
								}
									$periodos = $_POST['periodos'];								
								?></td>
                            </tr>							
							<tr>           
                                <td><label for="cidade">Objetivo:</label></td>
                                <td>
								<?php 
								if (isset($_POST['objetivo'])){
									echo $_POST['objetivo'];									
								}else{
									$_POST['objetivo'] = "$login->objetivo";
									echo '<textarea style="height:142px" type="text" class="form-control" name="objetivo" placeholder="Digite o objetivo do curso" />'.$login->objetivo.'</textarea>';
								}
									$objetivo = $_POST['objetivo'];								
								?></td>
                            </tr>
							<tr>           
                                <td><label for="cidade">Coordenação:</label></td>
                                <td>
								<?php 
								if (isset($_POST['coordenacao'])){
									echo $_POST['coordenacao'];									
								}else{
									$_POST['coordenacao'] = "$login->coordenacao";
									echo '<textarea style="height:142px" type="text" class="form-control" name="coordenacao" placeholder="Digite as informações sobre a coordenacao" />'.$login->coordenacao.'</textarea>';
								}
									$coordenacao = $_POST['coordenacao'];								
								?></td>
                            </tr>
							
							
					<?php
					require_once('conexao.php');
					
					$nome = (isset($_POST['name'])) ? $_POST['name'] : '';
					$cidade = (isset($_POST['cidade'])) ? $_POST['cidade'] : '';
					$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
					$end = (isset($_POST['end'])) ? $_POST['end'] : '';
					$bairro = (isset($_POST['bairro'])) ? $_POST['bairro'] : '';
					$email = (isset($_POST['email'])) ? $_POST['email'] : '';
					$dateN = (isset($_POST['dateN'])) ? $_POST['dateN'] : '';
					$cpf = (isset($_POST['cpf'])) ? $_POST['cpf'] : '';
					$celular = (isset($_POST['celular'])) ? $_POST['celular'] : '';
					$sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : '';
					$curso = (isset($_POST['curso'])) ? $_POST['curso'] : '';
					$cursos2 = (isset($_POST['curso2'])) ? $_POST['curso2'] : '';
					
					$sql = "UPDATE dados 
							SET name = '$nome',
							cidade = '$cidade', 
							estado = '$estado', 
							end = '$end', 
							bairro = '$bairro', 
							email = '$email', 
							dateN = '$dateN', 
							cpf = '$cpf', 
							celular = '$celular', 
							sexo = '$sexo', 
							curso = '$curso', 
							curso2 = '$cursos2'
							WHERE id= '$_SESSION[usuarioID]'";
					$atualizar = $conexao->query($sql);							
					?>
					</tbody>								
                    </table>
		<?php
		if (empty($_POST['submit'])){
		echo '<input type="submit" name="submit" value="ATUALIZAR" class="btn-sm btn-primary"><br><br>';
		}
		?>
                </form>
		
		<?php
		if (!empty($_POST['submit'])){
			echo '<p class="btn-sm label-success" align="center">Sua alteração foi realizada com sucesso!</p>';
		}else{
			echo '<p class="btn-sm label-primary" align="center">
			Todas as informações são obrigatórias</p>';
		}	
		?>
				</fieldset>
			</div>
		</div>
		<!-- /Banner -->
		<div>
		</div>
		<!-- Copyright -->
		<div id="copyright" class="container">
			Copyright © 2016 Faculdade Presidente Antônio Carlos de Conselheiro Lafaiete - (31) 3769-4000
		</div>
		<!-- Copyright -->

	</body>
</html>				