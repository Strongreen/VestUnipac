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
					<li><a href="admin.php">INICIO</a></li>
					<li class="active" class="page-scroll"><a href="criar.php">CRIAR</a></li>
					<li><a href="modificar.php">MODIFICAR</a></li>
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
				<h4 class="text-muted">Preencha as informações para criar curso</h4>
				
				<fieldset>
                <form method="POST" action="criarCursos.php" id="dados">
                    <table class="table table-responsive">      
                        <tbody>
                            <tr>           
                                <td><label for="name">Nome do curso:</label></td>
                                <td>
								<?php 
								if (isset($_POST['nome'])){
									echo $_POST['nome'];									
								}else{
									$_POST['nome'] = "";
									echo '<input type="text" class="form-control" name="nome"  placeholder="Digite o nome do curso" />';
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
									$_POST['resumo'] = "";
									echo '<textarea type="text" class="form-control" name="resumo" placeholder="Descreva o curso" /></textarea>';
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
									$_POST['autorizacao'] = "";
									echo '<input type="text" class="form-control" name="autorizacao" placeholder="Digite a autorização do curso" />';
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
									$_POST['duracao'] = "";
									echo '<input type="text" class="form-control" name="duracao" placeholder="Digite a duracao do curso" />';
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
									$_POST['periodos'] = "";
									echo '<input type="text" class="form-control" name="periodos" placeholder="Digite a qte de periodos do curso" />';
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
									$_POST['objetivo'] = "";
									echo '<textarea type="text" class="form-control" name="objetivo" placeholder="Digite o objetivo do curso" /></textarea>';
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
									$_POST['coordenacao'] = "";
									echo '<textarea type="text" class="form-control" name="coordenacao" placeholder="Digite as informações sobre a coordenacao" /></textarea>';
								}
									$coordenacao = $_POST['coordenacao'];								
								?></td>
                            </tr>
							
							
					<?php
					if (!empty($nome) || !empty($email) || !empty($dataN) || !empty($cpf) || !empty($celular) || !empty($sexo) || !empty($curso)){
						require_once('conexao.php');			
						$sql = "insert into cursos (nome, resumo, autorizacao, duracao, periodos, objetivo, coordenacao) values ('$nome', '$resumo', '$autorizacao', '$duracao', '$periodos', '$objetivo', '$coordenacao')";
						$inserir = $conexao->query($sql);
					}							
					?>
					</tbody>					
                    </table>
		<?php
		if (empty($_POST['submit'])){
		echo '<input type="reset" value="LIMPAR" name="reset" class="btn-sm btn-primary">&nbsp;&nbsp;
		<input type="submit" name="submit" value="ENVIAR" class="btn-sm btn-primary"><br><br>';
		}
		?>
                </form>
		
		<?php
		if (!empty($_POST['submit'])){
			echo '<p class="btn-sm label-success" align="center">Sua inscrição foi realizada com sucesso!</p>';
		}else{
			echo '<p class="btn-sm label-primary" align="center">
			Todas as informações são obrigatórias</p>';
		}	
		?>
				</fieldset>
			</div>
		</div>
		<!-- /Banner -->

		<!-- Copyright -->
		<div id="copyright" class="container">
			Copyright © 2016 Faculdade Presidente Antônio Carlos de Conselheiro Lafaiete - (31) 3769-4000
		</div>
		<!-- Copyright -->

	</body>
</html>				