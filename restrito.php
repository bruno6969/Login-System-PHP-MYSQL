<?php include 'cabecalho-user.php';?>

<title>Página Restrita Nível 1</title>

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
	<h5 class="indigo-text">Página restrita - Nível 1</h5>
	<h6 class="blue-grey-text">Usuário: <?php echo $_SESSION['UsuarioNome']; ?></h6>
</div>
<!--card stats start-->
<center>
	<div id="card-stats">
		<div class="row">
			<div class="col s12 m6 l3">
				<p><a class="btn waves-effect waves-light teal" href="alterarsenha.php">Alterar senha</a></p>
			</div>
		</div>
	</div>
</center>
<!--card stats end-->
<!-- START FOOTER -->

<?php for ($i=0; $i < 20; $i++) { echo "<br/ >";}?>

<!-- END FOOTER -->

<?php include 'rodape.php';?>