<?php 

include "cabecalho-user.php";

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

<title>Página Restrita - ADMIN</title>
<div class="col" style="margin: 20px;">
  <h5 class="indigo-text">Página restrita - Administradores</h5>
  <h6 class="blue-grey-text">Logado como <?php echo $_SESSION['UsuarioNome']; ?></h6>
</div>
<div id="card-stats">
  <div class="row" style="padding: 50px; margin-bottom: 20%;">
    <div class="col s12 m6 l3">
      <p>
      	<a class="btn waves-effect waves-light teal" href="cadastrar.php" style="width: 250px;">Cadastrar</a>
      </p>
    </div>
    <div class="col s12 m6 l3">
      <p>
      	<a class="btn waves-effect waves-light teal" href="#" style="width: 250px;">Editar</a>
      </p>
    </div>
    <div class="col s12 m6 l3">
      <p>
      	<a class="btn waves-effect waves-light teal" href="#" style="width: 250px;">Listar</a>
      </p>
    </div>
    <div class="col s12 m6 l3">
      <p>
      	<a class="btn waves-effect waves-light teal" href="#" style="width: 250px;">Excluir</a>
      </p>
    </div>
  </div>
</div>
<?php include "rodape.php"; ?>

