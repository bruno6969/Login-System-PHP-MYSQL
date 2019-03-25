<?php
 // A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

  // Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioId'])) {
      // Destrói a sessão por segurança
  session_destroy();
      // Redireciona o visitante de volta pro login
  header("Location: index.php"); exit;
}
include "/conn/validar.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!--Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importar Materilize CSS-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"/>
    <!-- Para mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo.png" />
  </head>
  <body>
    <nav class="indigo lighten-1" role="navigation">
      <div class="nav-wrapper container">
        <ul class="right hide-on-med-and-down">
          <li><a href="logout.php">Sair</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="admin.php">Voltar</a></li>
        </ul>
        <ul id="nav-mobile" class="sidenav">
          <li><a href="logout.php">Sair</a></li>
        </ul>
        <a id="logo-container" href="#" class="brand-logo">SOLOGIN</a>
        <a href="index.php" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
        </a>
      </div>
    </nav>
    <!--FORM CADASTRO-->          
          <div class="card-panel">
            <h4 class="header2">Editar dados</h4>
            <div class="row">
              <form action="admin_config.php" method="post" class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                  <p class="cyan-text" style="padding: 10px; background-color: rgba(111,111,111,0.1);">Dados Pessoais</p></div>
                  <div class="input-field col s">
                    <input id="nome" name="nome" type="text" required="true">
                    <label for="nome"><?php echo $_SESSION['UsuarioNome'];?></label>
                  </div>
                  <div class="input-field col s">
                    <input id="email" name="email" type="email" required="true">
                    <label for="email"><?php echo $_SESSION['UsuarioEmail'];?></label>
                  </div>
                  <div class="input-field col s">
                    <input id="telefone" name="telefone" type="text" class="form-controll" required="true">
                    <label for="telefone"><?php echo $_SESSION['UsuarioTelefone'];?></label>
                  </div>
                </div>
                <div class="row">
                  <ul class="collapsible col s">
                    <p class="red-text" style="padding: 10px; background-color: rgba(111,111,111,0.1);">Selecione o tipo de pessoa</p>
                    <li>
                      <div class="collapsible-header blue-text">Pessoa Física</div>
                      <div class="collapsible-body">
                        <div class="input-field">
                          <input id="cpf" type="text" name="cpf" class="form-controll">
                          <label for="cpf"><?php echo $_SESSION['UsuarioCPF'];?></label>
                        </div>
                      </div>
                    </li>
                    <li>
                      <input type="radio" name="tipo_pessoa" value="j">
                      <div class="collapsible-header green-text">Pessoa Juridica</div>
                      <div class="collapsible-body">
                        <div class="input-field">
                          <input id="cnpj" type="text" name="cnpj" class="form-controll"> 
                          <label for="cnpj"><?php echo $_SESSION['UsuarioCNPJ'];?></label>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="input-field col s">
                    <input type="date" id="data_nasc" name="data_nascimento" class="date" max="2010-12-31" placeholder="__/__/____">
                    <label for="data_nasc">Data de Nascimento</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                  <p class="cyan-text" style="padding: 10px; background-color: rgba(111,111,111,0.1);">Dados de Endereço</p></div>
                  <div class="input-field col s">
                    <input id="endereco" type="text" name="endereco_rua" required="true">
                    <label for="endereco"><?php echo $_SESSION['UsuarioRua'];?></label>
                  </div>
                  <div class="input-field col s">
                    <input id="numero" type="number" name="endereco_numero"required="true" max="99999" min="1">
                    <label for="numero"><?php echo $_SESSION['UsuarioNum'];?></label>
                  </div>
                  <div class="input-field col s">
                    <input type="number" id="cep" name="endereco_cep" class="form-controll" max="99999999" min="1">
                    <label label for="cep"><?php echo $_SESSION['UsuarioCEP'];?></label>
                  </div>
                  <div class="input-field col s">
                    <input id="complemento" type="text" name="endereco_complemnto">
                    <label for="complemento"><?php echo $_SESSION['UsuarioComp'];?></label>
                  </div>
                </div>
                <div class="row"> 
                  <div class="input-field col s12">
                  <p class="cyan-text" style="padding: 10px; background-color: rgba(111,111,111,0.1);">Dados de Usuário e Senha</p></div>
                  <div class="input-field col s">
                    <input id="username" type="text" name="usuario" required="true">
                    <label for="username"><?php echo $_SESSION['UsuarioUsuario'];?></label>
                  </div>
                  <div class="input-field col s">
                    <input id="password" type="password" name="senha" required="true">
                    <label for="password">Nova Senha</label>
                  </div>
                  <div class="input-field col s">
                    <input id="confirm_password" type="password" required="true">
                    <label for="password">Confirmar Senha</label>
                  </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                  <div class="row">
                    <div class="input-field col s">
                      <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Alterar<i class="mdi-content-send right"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!--FORM-->
<?php include "rodape.php"; 

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioId'])) {
   // Destrói a sessão por segurança
session_destroy();
   // Redireciona o visitante de volta pro login
header("Location: index.php"); exit;
}

include('protecao.php');
include('conn/conexao.php');
$_POST = protect($_POST);
$id_user = intval($_GET['codigo']);

if (!empty($_POST)) {
    $nome                = $_POST['nome'];
    $nivel               = $_POST['nivel'];
    $email               = $_POST['email'];
    $telefone            = $_POST['telefone'];
    $cpf                 = $_POST['cpf'];
    $cnpj                = $_POST['cnpj'];
    $endereco_rua        = $_POST['endereco_rua'];
    $endereco_numero     = $_POST['endereco_numero'];
    $endereco_cep        = $_POST['endereco_cep'];
    $endereco_complemnto = $_POST['endereco_complemnto'];
    $usuario             = $_POST['usuario'];
    $senha               = sha1($_POST['senha']);
    $data_nascimento     = $_POST['data_nascimento'];
    $data_cadastro       = $_POST['data_cadastro'];
    
    // Verificar se usuário já existe
    $consulta = "SELECT * FROM `USUARIOS` WHERE (`CPF` = '$cpf') AND (`CNPJ` = '$cnpj')";
    $query_co = mysqli_query($conn, $consulta);
    
    if (mysqli_num_rows($query_co) > 0) {
        // Usuário existe
        // Mensagem de erro quando o usuário foi encontrado
        echo "<script language='javascript' type='text/javascript'>alert('Esse cadastro já existe');window.location.href='admin.php';</script>";
        die();
        
    } else {
        // Usuário não existe
        $inserir = "UPDATE `USUARIOS` SET `NIVEL` = '$nivel', `NOME` = '$nome', `EMAIL` = '$email', `TELEFONE` = '$telefone', `CPF` = '$cpf', `CNPJ` = '$cnpj', `ENDERECO_RUA` = '$endereco_rua', `ENDERECO_NUM` = '$endereco_numero', `ENDERECO_CEP` ='$endereco_cep', `ENDERECO_COMPLEMENTO` = '$endereco_complemento', `USUARIO` = '$usuario', `SENHA` = '$senha', `DATA_NASCIMENTO` = '$data_nascimento') WHERE  `ID` = '$id_user'";
        
        $query = mysqli_query($conn, $inserir);
        echo "<script language='javascript' type='text/javascript'>alert('Dados alterados com sucesso!');window.location.href='admin.php';</script>";
        die();
    }
} else {
	$sql = "SELECT * FROM USUARIOS WHERE ID = '$id_user'";
	$query = mysqli_query($conn, $sql);
	$linha = mysqli_fetch_assoc($query);

	$_SESSION['UsuarioId']        = $linha['ID'];
	$_SESSION['UsuarioNome']      = $linha['NOME'];
	$_SESSION['UsuarioNivel']     = $linha['NIVEL'];
	$_SESSION['UsuarioEmail']     = $linha['EMAIL'];
	$_SESSION['UsuarioTelefone']  = $linha['TELEFONE'];
	$_SESSION['UsuarioUsuario']   = $linha['USUARIO'];
	$_SESSION['UsuarioSenha']     = $linha['SENHA'];
	$_SESSION['UsuarioCPF']       = $linha['CPF'];
	$_SESSION['UsuarioTelefone']  = $linha['TELEFONE'];
	$_SESSION['UsuarioTipoPessoa'] = $linha['TIPO_PESSOA'];
	$_SESSION['UsuarioCNPJ']       = $linha['CNPJ'];
	$_SESSION['UsuarioRua']        = $linha['ENDERECO_RUA'];
	$_SESSION['UsuarioNum']       = $linha['ENDERECO_NUM'];
	$_SESSION['UsuarioCEP']       = $linha['ENDERECO_CEP'];
	$_SESSION['UsuarioComp']       = $linha['ENDERECO_COMPLEMENTO'];
	$_SESSION['UsuarioNasci']      = $linha['DATA_NASCIMENTO'];
	 
}
?>

