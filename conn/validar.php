<?php
session_start();

include('../conn/conexao.php');
include('../protecao.php');

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['username']) OR empty($_POST['password']))) {
  header("Location: ../index.php"); exit;
} else {
  $user = protect($_POST['username']);
  $pass = sha1($_POST['password']);
}

// Validação do usuário/senha digitados
$sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$user ."') AND (`senha` = '".$pass ."') AND (`ativo` = 1) LIMIT 1";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) != 1) {
  // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
  $_SESSION["invalido"] = true;
  header("Location: ../index.php");

} else {

      // Salva os dados encontados na variável $resultado
  $resultado = mysqli_fetch_assoc($query);

      // Se a sessão não existir, inicia uma
  if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sessão
  $_SESSION['UsuarioID'] = $resultado['id'];
  $_SESSION['UsuarioNome'] = $resultado['nome'];
  $_SESSION['UsuarioNivel'] = $resultado['nivel'];

  session_cache_expire(10);

  // Redireciona o visitante
  if ($resultado['nivel'] == 1) {
    header("Location: ../supervisor.php"); exit;
  } elseif ($resultado['nivel'] == 2) {
    header("Location: ../admin.php"); exit;
  } elseif ($resultado['nivel'] == 0) {
    header("Location: ../cliente.php"); exit;
  }
}
?>