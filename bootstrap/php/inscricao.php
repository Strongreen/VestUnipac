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
						<li><a href="mensalidade.php">MENSALIDADE</a></li>
						<li class="active" class="page-scroll"><a href="inscricao.php">INSCRIÇÃO</a></li>
						<li><a href="contato.php">CONTATO</a></li>
						<li><a href="login.php">LOGIN</a></li>
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
                <form method="POST" action="inscricao.php" id="dados" onSubmit="return enviardados();">
                    <table class="table table-responsive">      
                        <tbody>
                            <tr>           
                                <td><label for="name">Nome:</label></td>
                                <td>
								<?php 
								if (isset($_POST['name'])){
									echo $_POST['name'];									
								}else{
									$_POST['name'] = "";
									echo '<input type="text" class="form-control" name="name"  placeholder="Digite seu nome" />';
								}									
									$nome = $_POST['name'];
								?></td>
                            </tr>
							<tr>           
                                <td><label for="cidade">Cidade:</label></td>
                                <td>
								<?php 
								if (isset($_POST['cidade'])){
									echo $_POST['cidade'];									
								}else{
									$_POST['cidade'] = "";
									echo '<input type="text" class="form-control" name="cidade" placeholder="Digite sua cidade" />';
								}
									$cidade = $_POST['cidade'];								
								?></td>
                            </tr>
							<tr>           
                                <td><label for="estado">Estado:</label></td>
                                <td>
								<?php 
								if (isset($_POST['estado'])){
									echo $_POST['estado'];									
								}else{
									$_POST['estado'] = "";
								echo'<select name="estado" class="form-control" id="estado">
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
									$estado = $_POST['estado'];						
								?></td>
                            </tr>
							<tr>           
                                <td><label for="end">Endereço:</label></td>
                                <td>
								<?php 
								if (isset($_POST['end'])){
									echo $_POST['end'];									
								}else{
									$_POST['end'] = "";
									echo '<input type="text" class="form-control" name="end" placeholder="Digite seu endereço" />';
								}
									$end = $_POST['end'];								
								?></td>
                            </tr>
							<tr>           
                                <td><label for="bairro">Bairro:</label></td>
                                <td>
								<?php 
								if (isset($_POST['bairro'])){
									echo $_POST['bairro'];									
								}else{
									$_POST['bairro'] = "";
									echo '<input type="text" class="form-control" name="bairro" placeholder="Digite seu bairro" />';
								}
									$bairro = $_POST['bairro'];								
								?></td>
                            </tr>
                            <tr>           
                                <td><label for="email">Email:</label></td>
                                <td>
								<?php 
								if (isset($_POST['email'])){
									echo $_POST['email'];									
								}else{
									$_POST['email'] = "";
									echo '<input type="email" class="form-control" name="email" placeholder="Digite seu email" />';
								}
									$email = $_POST['email'];								
								?></td>
                            </tr>
                            <tr>           
                                <td><label>Data de Nascimento:</label> </td>
                                <td>
								<?php 
								if (isset($_POST['bday'])){
									echo $_POST['bday'];									
								}else{
									$_POST['bday'] = "";
									echo '<input type="date"  class="form-control" name="bday" />';
									
								}
									$dateN = $_POST['bday'];								
								?></td>
                            </tr>
                            <tr>           
                                <td><label>CPF:</label></td>
                                <td>
								<?php 
								if (isset($_POST['cpf'])){
									echo $_POST['cpf'];									
								}else{
									$_POST['cpf'] = "";
									echo '<input type="text" class="form-control" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="Digite seu CPF">';
								}
									$cpf = $_POST['cpf'];								
								?></td>
                            </tr>
                            <tr>           
                                <td><label>Celular:</label></td>
                                <td>
								<?php 
								if (isset($_POST['usrtel'])){
									echo $_POST['usrtel'];									
								}else{
									$_POST['usrtel'] = "";
									echo '<input type="tel" class="form-control" name="usrtel" placeholder="Digite seu telefone">';
								}
									$celular = $_POST['usrtel'];								
								?>							
								</td>
                            </tr>
                            <tr>           
                                <td><label>Sexo:</label></td>
                                <td>
								<?php 
								if (isset($_POST['gender'])) {
									echo $_POST['gender'];
								}else{
									$_POST['gender'] = "";
									echo '<select name="gender" class="form-control" id="gender">
										<option value="">Selecione seu sexo</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Masculino">Masculino</option>';
								}
									$sexo = $_POST['gender'];	
								?></td>
                            </tr>
                            <tr>           
                                <td><label>Selecione a  1ª opção de curso:</label></td>
								<td>
								<?php 
								if (isset($_POST['cursos'])){
									echo $_POST['cursos'];									
								}else {
									$_POST['cursos'] = "";
									echo '<select name="cursos" class="form-control" id="cursos">
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
									$curso = $_POST['cursos'];
									
								?>
								<tr>           
                                <td><label>Selecione a 2ª opção de curso:</label></td>
								<td>
								<?php 
								if (isset($_POST['cursos2'])){
									echo $_POST['cursos2'];									
								}else {
									$_POST['cursos2'] = "";
									echo '<select name="cursos2" class="form-control" id="cursos2">
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
									$curso2 = $_POST['cursos2'];	
								
								?>
					<?php
					if (!empty($nome) || !empty($email) || !empty($dataN) || !empty($cpf) || !empty($celular) || !empty($sexo) || !empty($curso)){
						require_once('conexao.php');			
						$sql = "insert into dados (name, cidade, estado, end, bairro, email, dateN, cpf, celular, sexo, curso, curso2) values ('$nome', '$cidade', '$estado', '$end', '$bairro', '$email', '$dateN', '$cpf', '$celular', '$sexo', '$curso', '$curso2')";
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