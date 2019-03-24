<?php include "cabecalho-user.php";   

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

  // Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
      // Destrói a sessão por segurança
  session_destroy();
      // Redireciona o visitante de volta pro login
  header("Location: index.php"); exit;
}

?>
<title>Página Restrita - SUPERVISOR</title>
<div class="col" style="margin: 20px;">
  <h5 class="indigo-text">Página restrita - Supervidores</h5>
  <h6 class="blue-grey-text">Logado como <?php echo $_SESSION['UsuarioNome']; ?></h6>
</div>
<center><h5 class="indigo-text" style="margin-bottom: 400px;">PÁGINA DE SUPERVISOR</h5></center>
<?php include "rodape.php"; ?>

