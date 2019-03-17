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
<h5 class="indigo-text">Página restrita - Nível 1</h5>
<p>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</p>

<!--card stats start-->
<div id="card-stats">
	<div class="row">
		<div class="col s12 m6 l3">
			<div class="card">
				<div class="card-content  green white-text">
					<p class="card-stats-title"><i class="mdi-social-group-add"></i> Clientes Novos</p>
					<h4 class="card-stats-number">566</h4>
					<p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">de ontem</span>
					</p>
				</div>
				<div class="card-action  green darken-2">
					<div id="clients-bar"></div>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l3">
			<div class="card">
				<div class="card-content purple white-text">
					<p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Vendas do mês</p>
					<h4 class="card-stats-number">$8990.63</h4>
					<p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">do último mês</span>
					</p>
				</div>
				<div class="card-action purple darken-2">
					<div id="sales-compositebar"></div>

				</div>
			</div>
		</div>                            
		<div class="col s12 m6 l3">
			<div class="card">
				<div class="card-content blue-grey white-text">
					<p class="card-stats-title"><i class="mdi-action-trending-up"></i> Lucro de Hoje</p>
					<h4 class="card-stats-number">$536.52</h4>
					<p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">de ontem</span>
					</p>
				</div>
				<div class="card-action blue-grey darken-2">
					<div id="profit-tristate"></div>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l3">
			<div class="card">
				<div class="card-content pink lighten-2 white-text">
					<p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Faturas</p>
					<h4 class="card-stats-number">1806</h4>
					<p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">do último mês</span>
					</p>
				</div>
				<div class="card-action  pink darken-2">
					<div id="invoice-line"></div>
				</div>
			</div>
		</div>

	</div>
</div>
<!--card stats end-->


<?php include 'rodape.php';?>