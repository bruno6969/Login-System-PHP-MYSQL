<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['username']) OR empty($_POST['password']))) {
  header("Location: index.php"); exit;
} else {
  $user = $_POST['username'];
  $pass = sha1($_POST['password']);
}

  // Tenta se conectar ao servidor MySQL
$conn = mysqli_connect('localhost', 'admin', 'password');

  // Tenta se conectar a um banco de dados MySQL
$banco = mysqli_select_db($conn,'sistema');


  // Validação do usuário/senha digitados
$sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$user ."') AND (`senha` = '".$pass ."') AND (`ativo` = 1) LIMIT 1";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
  echo "Login inválido!"; exit;

} else {

      // Salva os dados encontados na variável $resultado
  $resultado = mysqli_fetch_assoc($query);

      // Se a sessão não existir, inicia uma
  if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sessão
  $_SESSION['UsuarioID'] = $resultado['id'];
  $_SESSION['UsuarioNome'] = $resultado['nome'];
  $_SESSION['UsuarioNivel'] = $resultado['nivel'];

  // Redireciona o visitante
  if ($resultado['nivel'] == 1) {
    header("Location: restrito.php"); exit;
  } elseif ($resultado['nivel'] == 2) {
    header("Location: admin.php"); exit;
  }
}

?>