<?php
session_start();
include('conexao.php');
include('../protecao.php');

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['username']) OR empty($_POST['password']))) {
    header("Location: ../index.php");
    exit;
} else {
    $user = protect($_POST['username']);
    $pass = sha1($_POST['password']);
}

// Validação do usuário/senha digitados
$sql   = "SELECT * FROM `sologin`.`USUARIOS` WHERE (USUARIO = '$user') AND (SENHA = '$pass')";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    $_SESSION['invalido'] = true;
    header("Location: ../index.php");
    
} else {
    
    // Salva os dados encontados na variável $resultado
    $resultado = mysqli_fetch_assoc($query);
    
    // Se a sessão não existir, inicia uma
    if (!isset($_SESSION))
        session_start();
    
    // Salva os dados encontrados na sessão
    $_SESSION['UsuarioId']         = $resultado['ID'];
    $_SESSION['UsuarioNome']       = $resultado['NOME'];
    $_SESSION['UsuarioNivel']      = $resultado['NIVEL'];
    $_SESSION['UsuarioEmail']      = $resultado['EMAIL'];
    $_SESSION['UsuarioTelefone']   = $resultado['TELEFONE'];
    $_SESSION['UsuarioUsuario']    = $resultado['USUARIO'];
    $_SESSION['UsuarioSenha']      = $resultado['SENHA'];
    $_SESSION['UsuarioCPF']        = $resultado['CPF'];
    $_SESSION['UsuarioTelefone']   = $resultado['TELEFONE'];
    $_SESSION['UsuarioTipoPessoa'] = $resultado['TIPO_PESSOA'];
    $_SESSION['UsuarioCNPJ']       = $resultado['CNPJ'];
    $_SESSION['UsuarioRua']        = $resultado['ENDERECO_RUA'];
    $_SESSION['UsuarioNum']        = $resultado['ENDERECO_NUM'];
    $_SESSION['UsuarioCEP']        = $resultado['ENDERECO_CEP'];
    $_SESSION['UsuarioComp']        = $resultado['ENDERECO_COMPLEMENTO'];
    $_SESSION['UsuarioNasci']      = $resultado['DATA_NASCIMENTO'];
    
    // Redireciona o visitante
    if ($resultado['NIVEL'] == 1) {
        header("Location: ../supervisor.php");
        exit;
    } elseif ($resultado['NIVEL'] == 2) {
        header("Location: ../admin.php");
        exit;
    } elseif ($resultado['NIVEL'] == 0) {
        header("Location: ../cliente.php");
        exit;
    }
}
?>