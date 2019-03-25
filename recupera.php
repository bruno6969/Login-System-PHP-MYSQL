<?php 
session_start(); 
include ('cabecalho.php');
include('protecao.php');
include('conn/conexao.php');

if (isset($_POST['action'])){
  $novasenha = substr(md5(time()), 0, 6);
  $email = protect($_POST['email']);
  $sql = "UPDATE `USUARIOS` SET `SENHA` = SHA1('".$novasenha."') WHERE `USUARIOS`.`EMAIL` = '$email'";
  $que = mysqli_query($conn, $sql);

  mail($email, "Sua nova senha", "Sua nova senha: ".$novasenha);

  //Provisório
  echo "<h6>Sua nova senha é: ".$novasenha."</h6>";
}

?>
<main style="padding: 22px;">
  <center>
    <h5 class="indigo-text">Recuperação de usuário e senha</h5>
    <div class="row" style="padding: 5%; margin-bottom: 250px;">
      <form action="" method="post" class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
            <span class="helper-text" data-error="Precisa ser um email válido!" data-success="Tudo ok! Pode clicar em 'Enviar'">Os dados serão enviados à este email. Portanto, certifique-se de que seja realmente esse o email que foi cadastrado.</span>
          </div>
        </div>
        <div class="row">
            <div class="row">
              <div class="input-field col s">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action" value="action">Enviar<i class="mdi-content-send right"></i></button>
              </div>
            </div>
        </div>
      </form>
    </div>
  </center>
</main>
<?php include 'rodape.php';?>