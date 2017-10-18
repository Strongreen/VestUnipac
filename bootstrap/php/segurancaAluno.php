<?php
//  Configurações do Script
// ==============================
$_SG['conectaServidor'] = true;    // Abre uma conexão com o servidor MySQL?
$_SG['abreSessao'] = true;         // Inicia a sessão com um session_start()?
$_SG['caseSensitive'] = true;     // Usar case-sensitive? Onde 'thiago' é diferente de 'THIAGO'
$_SG['validaSempre'] = true;       // Deseja validar o usuário e a senha a cada carregamento de página?
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.
$_SG['servidor'] = 'localhost';    // Servidor MySQL
$_SG['usuario'] = 'root';          // Usuário MySQL
$_SG['senha'] = '';                // Senha MySQL
$_SG['banco'] = 'dweb';            // Banco de dados MySQL
$_SG['paginaLogin'] = 'loginAluno.php'; // Página de login
$_SG['tabela'] = 'dados';       // Nome da tabela onde os usuários são salvos

// ==============================
// ======================================
//   ~ Não edite a partir deste ponto ~
// ======================================
// Verifica se precisa fazer a conexão com o MySQL
if ($_SG['conectaServidor'] == true) {
  $_SG['link'] = mysqli_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha'], $_SG['banco']) or die("MySQL: Não foi possível conectar-se ao servidor [".$_SG['servidor']."].");
}
// Verifica se precisa iniciar a sessão
if ($_SG['abreSessao'] == true)
  session_start();
/**
* Função que valida um usuário e senha
*
* @param string $usuario - O usuário a ser validado
* @param string $senha - A senha a ser validada
*
* @return bool - Se o usuário foi validado ou não (true/false)
*/
function validaUsuarioAluno($usuario) {
  global $_SG;
  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
  // Usa a função addslashes para escapar as aspas
  $nusuario = addslashes($usuario);
  // Monta uma consulta SQL (query) para procurar um usuário
  $sql = "SELECT `id`, `cpf`, `name`, `cidade`, `estado`, `end`, `bairro`, `email`, `dateN`, `celular`, `sexo`, `curso`, `curso2`  FROM `".$_SG['tabela']."` WHERE ".$cS." `cpf` = '".$nusuario."' LIMIT 1";
  $query = $_SG['link']->query($sql);
  $resultado = $query->fetch_array();
  // Verifica se encontrou algum registro
  if (empty($resultado)) {
    // Nenhum registro foi encontrado => o usuário é inválido
    return false;
  } else {
    // Definimos dois valores na sessão com os dados do usuário
    $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
	 $_SESSION['Nome'] = $resultado['name']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
	$_SESSION['cidade'] = $resultado['cidade']; // Pega o valor da coluna 'cidade' do registro encontrado no MySQL
	$_SESSION['estado'] = $resultado['estado']; // Pega o valor da coluna 'estado' do registro encontrado no MySQL
	$_SESSION['end'] = $resultado['end']; // Pega o valor da coluna 'end' do registro encontrado no MySQL
	$_SESSION['bairro'] = $resultado['bairro']; // Pega o valor da coluna 'bairro' do registro encontrado no MySQL
	$_SESSION['email'] = $resultado['email']; // Pega o valor da coluna 'email' do registro encontrado no MySQL
	$_SESSION['dateN'] = $resultado['dateN']; // Pega o valor da coluna 'dateN' do registro encontrado no MySQL
    $_SESSION['usuarioCPF'] = $resultado['cpf']; // Pega o valor da coluna 'cpf' do registro encontrado no MySQL
    $_SESSION['celular'] = $resultado['celular']; // Pega o valor da coluna 'celular' do registro encontrado no MySQL
    $_SESSION['sexo'] = $resultado['sexo']; // Pega o valor da coluna 'sexo' do registro encontrado no MySQL
    $_SESSION['curso'] = $resultado['curso']; // Pega o valor da coluna 'curso' do registro encontrado no MySQL
    $_SESSION['curso2'] = $resultado['curso2']; // Pega o valor da coluna 'curso2' do registro encontrado no MySQL
    // Verifica a opção se sempre validar o login
    if ($_SG['validaSempre'] == true) {
      // Definimos dois valores na sessão com os dados do login
      $_SESSION['usuarioLogin'] = $usuario;
    }
    return true;
  }
}
/**
* Função que protege uma página
*/
function protegePaginaAluno() {
  global $_SG;
  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioCPF'])) {
    // Não há usuário logado, manda pra página de login
    expulsaVisitanteAluno();
  } else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioCPF'])) {
    // Há usuário logado, verifica se precisa validar o login novamente
    if ($_SG['validaSempre'] == true) {
      // Verifica se os dados salvos na sessão batem com os dados do banco de dados
      if (!validaUsuario($_SESSION['usuarioLogin'])) {
        // Os dados não batem, manda pra tela de login
        expulsaVisitanteAluno();
      }
    }
  }
}
/**
* Função para expulsar um visitante
*/
function expulsaVisitanteAluno() {
  global $_SG;
  // Remove as variáveis da sessão (caso elas existam)
  unset($_SESSION['usuarioID'], $_SESSION['usuarioCPF'], $_SESSION['usuarioLogin']);
  // Manda pra tela de login
  header("Location: ".$_SG['paginaLogin']);
}
?>