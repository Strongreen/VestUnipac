<!DOCTYPE HTML>
<?php
include("segurancaAluno.php"); // Inclui o arquivo com o sistema de segurança
protegePaginaAluno(); // Chama a função que protege a página
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
					<a href="#"><img src="../images/FUPAC.png"></a> 
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
					<li class="active" class="page-scroll"><a href="modificarAluno.php">MODIFICAR</a></li>
					<li><a href="consultaAluno.php">CONSULTAR</a></li>
					<li><a href="deletarAluno.php">DELETAR</a></li>
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
                <form method="POST" action="modificarAluno.php" id="dados" onSubmit="return enviardados();">
                    <table class="table table-responsive">      
                        <tbody>
                            <tr>           
                                <td><label for="name">Nome:</label></td>
                                <td>
								<?php 
								if (isset($_POST['name'])){
									echo $_POST['name'];									
								}else{
									$_POST['name'] = "$_SESSION[Nome]";
									echo '<input type="text" class="form-control" name="name" value="'.$_SESSION['Nome'].'"  placeholder="Digite seu nome" />';
								}
								?></td>
                            </tr>
							<tr>           
                                <td><label for="cidade">Cidade:</label></td>
                                <td>
								<?php 
								if (isset($_POST['cidade'])){
									echo $_POST['cidade'];									
								}else{
									$_POST['cidade'] = "$_SESSION[cidade]";
									echo '<input type="text" class="form-control" name="cidade" value="'.$_SESSION['cidade'].'" placeholder="Digite sua cidade" />';
								}								
								?></td>
                            </tr>
							<tr>           
                                <td><label for="estado">Estado:</label></td>
                                <td>
								<?php 
								if (isset($_POST['estado'])){
									echo $_POST['estado'];									
								}else{
									$_POST['estado'] = "$_SESSION[estado]";
								echo'<select name="estado" class="form-control" id="estado">
									<option selected="selected" value="'.$_SESSION['estado'].'" >'.$_SESSION['estado'].'</option>
									<option>Selecione seu estado</option>
									<option value=""></option>
									<option value="AC">AC</option>
									<option value="AL">AL</option>
									<option value="AP">AP</option>
									<option value="AM">AM</option>
									<option value="BA">BA</option>
									<option value="CE">CE</option>
									<option value="ES">ES</option>
									<option value="DF">DF</option>
									<option value="MA">MA</option>
									<option value="MT">MT</option>
									<option value="MS">MS</option>
									<option value="MG">MG</option>
									<option value="PA">PA</option>
									<option value="PB">PB</option>
									<option value="PR">PR</option>
									<option value="PE">PE</option>
									<option value="PI">PI</option>
									<option value="RJ">RJ</option>
									<option value="RN">RN</option>
									<option value="RS">RS</option>
									<option value="RO">RO</option>
									<option value="RR">RR</option>
									<option value="SC">SC</option>
									<option value="SP">SP</option>
									<option value="SE">SE</option>
									<option value="TO">TO</option>
									  </select>';
								}					
								?></td>
                            </tr>
							<tr>           
                                <td><label for="end">Endereço:</label></td>
                                <td>
								<?php 
								if (isset($_POST['end'])){
									echo $_POST['end'];									
								}else{
									$_POST['end'] = "$_SESSION[end]";
									echo '<input type="text" class="form-control" name="end" value="'.$_SESSION['end'].'" placeholder="Digite seu endereço" />';
								}								
								?></td>
                            </tr>
							<tr>           
                                <td><label for="bairro">Bairro:</label></td>
                                <td>
								<?php 
								if (isset($_POST['bairro'])){
									echo $_POST['bairro'];									
								}else{
									$_POST['bairro'] = "$_SESSION[bairro]";
									echo '<input type="text" class="form-control" name="bairro" value="'.$_SESSION['bairro'].'" placeholder="Digite seu bairro" />';
								}								
								?></td>
                            </tr>
                            <tr>           
                                <td><label for="email">Email:</label></td>
                                <td>
								<?php 
								if (isset($_POST['email'])){
									echo $_POST['email'];									
								}else{
									$_POST['email'] = "$_SESSION[email]";
									echo '<input type="email" class="form-control" name="email" value="'.$_SESSION['email'].'" placeholder="Digite seu email" />';
								}								
								?></td>
                            </tr>
                            <tr>           
                                <td><label>Data de Nascimento:</label> </td>
                                <td>
								<?php 
								if (isset($_POST['dateN'])){
									echo $_POST['dateN'];									
								}else{
									$_POST['dateN'] = "$_SESSION[dateN]";
									echo '<input type="date"  class="form-control" value="'.$_SESSION['dateN'].'" name="dateN" />';
									
								}								
								?></td>
                            </tr>
                            <tr>           
                                <td><label>CPF:</label></td>
                                <td>
								<?php 
								if (isset($_POST['cpf'])){
									echo $_POST['cpf'];									
								}else{
									$_POST['cpf'] = "$_SESSION[usuarioCPF]";
									echo '<input type="text" class="form-control" name="cpf" value="'.$_SESSION['usuarioCPF'].'" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="Digite seu CPF">';
								}								
								?></td>
                            </tr>
                            <tr>           
                                <td><label>Celular:</label></td>
                                <td>
								<?php 
								if (isset($_POST['celular'])){
									echo $_POST['celular'];									
								}else{
									$_POST['celular'] = "$_SESSION[celular]";
									echo '<input type="tel" class="form-control" name="celular" value="'.$_SESSION['celular'].'" placeholder="Digite seu telefone">';
								}								
								?>							
								</td>
                            </tr>
                            <tr>           
                                <td><label>Sexo:</label></td>
                                <td>
								<?php 
								if (isset($_POST['sexo'])) {
									echo $_POST['sexo'];
								}else{
									$_POST['sexo'] = "$_SESSION[sexo]";
									echo '<select name="sexo" class="form-control" id="sexo">
										<option selected="selected" value="'.$_SESSION['sexo'].'" >'.$_SESSION['sexo'].'</option>
										<option value=""></option>
										<option value="">Selecione seu sexo</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Masculino">Masculino</option>';
								}	
								?></td>
                            </tr>
                            <tr>           
                                <td><label>Selecione a  1ª opção de curso:</label></td>
								<td>
								<?php 
								if (isset($_POST['curso'])){
									echo $_POST['curso'];									
								}else {
									$_POST['curso'] = "$_SESSION[curso]";
									echo '<select name="curso" class="form-control" id="curso">
										<option selected="selected" value="'.$_SESSION['curso'].'" >'.$_SESSION['curso'].'</option>
										<option value="">Selecione seu curso</option>
                                        <option value=""></option>
                                        <option value="Administração">Administração</option>
                                        <option value="Educação Física">Educação Física</option>
                                        <option value="Engenharia de Computação">Engenharia de Computação</option>
                                        <option value="Engenharia de Controle e Automação">Engenharia de Controle e Automação</option>
                                        <option value="Engenharia de Produção">Engenharia de Produção</option>
                                        <option value="Engenharia de Minas">Engenharia de Minas</option>
                                        <option value="Engenharia Mecanica">Engenharia Mecanica</option>
                                        <option value="Engenharia de Segurança do Trabalho">Engenharia de Segurança do Trabalho</option>
                                        <option value="Engenharia Civil">Engenharia Civil</option>
                                        <option value="Pedagogia">Pedagogia</option>
                                        <option value="Medicina Veterinária">Medicina Veterinária</option>
                                    </select>';
								
										echo '</td>';
										echo '</tr>';	
								}
								?>
								<tr>           
                                <td><label>Selecione a 2ª opção de curso:</label></td>
								<td>
								<?php 
								if (isset($_POST['curso2'])){
									echo $_POST['curso2'];									
								}else {
									$_POST['curso2'] = "$_SESSION[curso2]";
									echo '<select name="curso2" class="form-control" id="curso2">
										<option selected="selected" value="'.$_SESSION['curso2'].'" >'.$_SESSION['curso2'].'</option>
										<option value="">Selecione seu curso</option>
                                        <option value=""></option>
                                        <option value="Administração">Administração</option>
                                        <option value="Educação Física">Educação Física</option>
                                        <option value="Engenharia de Computação">Engenharia de Computação</option>
                                        <option value="Engenharia de Controle e Automação">Engenharia de Controle e Automação</option>
                                        <option value="Engenharia de Produção">Engenharia de Produção</option>
                                        <option value="Engenharia de Minas">Engenharia de Minas</option>
                                        <option value="Engenharia Mecanica">Engenharia Mecanica</option>
                                        <option value="Engenharia de Segurança do Trabalho">Engenharia de Segurança do Trabalho</option>
                                        <option value="Engenharia Civil">Engenharia Civil</option>
                                        <option value="Pedagogia">Pedagogia</option>
                                        <option value="Medicina Veterinária">Medicina Veterinária</option>
                                    </select>';
								
										echo '</td>';
										echo '</tr>';
								}
								$cursos2 = $_POST['curso2'];
								?>
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