<?php 
  session_start();
  include 'cabecalho.php';
?>
<main style="padding: 22px;">
  <center>
    <h5 class="indigo-text">Faça o login na sua conta</h5>
    <div class="container">
      <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
        <form class="col s12" action="/conn/validar.php" method="post">
          <div class='row'>
            <div class='input-field col s12'>
              <input class='validate' type='text' name='username' id='username' />
              <label for='username'>Digite seu usuário</label>
            </div>
          </div>
          <div class='row'>
            <div class='input-field col s12'>
              <input class='validate' type='password' name='password' id='password' />
              <label for='password'>Digite sua senha</label>
            </div>
            <label style='float: right;'>
            <a class='pink-text' href='#!'><b>Esqueci a senha</b></a>
            </label>
          </div>
          <?php 
            if(isset($_SESSION["invalido"])){
                $dados_invalidos = $_SESSION["invalido"];
                echo "<p class='red-text'><b>Usuário e/ou senha inválidos!</b></p>";
              }
            ?>
          <br />
          <center>
            <div class='row'>
              <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
            </div>
          </center>
        </form>
      </div>
    </div>
    <a href="#!">Ainda não sou cadastrado</a>
  </center>
</main>
<?php include 'rodape.php';?>
<?php unset($_SESSION["invalido"]); ?>