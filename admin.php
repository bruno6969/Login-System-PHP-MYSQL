<title>Página Restrita Nível 2</title>

<?php include 'cabecalho-user.php';?>

<?php

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
<div class="col" style="margin: 20px;">
  <h5 class="indigo-text">Página restrita - Nível 2</h5>
  <h6 class="blue-grey-text">Usuário: <?php echo $_SESSION['UsuarioNome']; ?></h6>
</div>

<!--card stats start-->
<div id="card-stats">
  <div class="row">

    <div class="col s12 m6 l3">
      <p><a class="btn waves-effect waves-light teal" href="cadastrar.php">Cadastrar</a></p>
    </div>
    <div class="col s12 m6 l3">
      <p><a class="btn waves-effect waves-light teal" href="editar.php">Editar</a></p>
    </div>
    <div class="col s12 m6 l3">
      <p><a class="btn waves-effect waves-light teal" href="listar.php">Listar</a></p>
    </div>
    <div class="col s12 m6 l3">
      <p><a class="btn waves-effect waves-light teal" href="excluir.php">Excluir</a></p>
    </div>
  </div>
</div>
<!--card stats end-->
<?php for ($i=0; $i < 15; $i++) { echo "<br/ >";}?>
<?php include 'rodape.php';?>