<?php
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
  
   // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioId'])) {
       // Destrói a sessão por segurança
   session_destroy();
       // Redireciona o visitante de volta pro login
   header("Location: index.php"); exit;
  }
  include "cabecalho-user.php";
  include "/conn/validar.php";
  ?>
<title>Página Restrita - ADMIN</title>
<div class="col" style="margin: 20px;">
  <h5 class="indigo-text">Página restrita - Administradores</h5>
  <h6 class="blue-grey-text">Logado como <?php echo $_SESSION['UsuarioNome']; ?></h6>
</div>
<div id="card-stats" style="margin-bottom: 300px;">
  <div class="row" style="margin: 5px;">
    <ul class="collapsible col s12" style="padding: 2px;">
      <li>
        <div class="collapsible-header btn waves-effect waves-light teal" style="padding: 10px;">Cadastrar</div>
        <div class="collapsible-body" style="padding: 0;">
          <!--FORM CADASTRO-->          
          <div class="card-panel">
            <h4 class="header2">Formulário para cadastro de usuário</h4>
            <div class="row">
              <form action="cadastrar.php" method="post" class="col s12">
                <div class="row">
                  <div class="input-field col s">
                    <select name="nivel">
                      <option value="0" selected disabled="true">Nível de Acesso</option>
                      <option value="0">Cliente</option>
                      <option value="1">Supervisor</option>
                      <option value="2">Administrador</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s">
                    <input id="nome" name="nome" type="text" required="true">
                    <label for="nome">Nome completo</label>
                  </div>
                  <div class="input-field col s">
                    <input id="email" name="email" type="email" required="true">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s">
                    <input id="telefone" name="telefone" type="text" class="form-controll" data-mask="(__) _____-____" value='(__) _____-____' required="true">
                    <label for="telefone">Telefone</label>
                  </div>
                </div>
                <div class="row">
                  <ul class="collapsible col s">
                    <p class="red-text" style="padding: 10px; background-color: rgba(111,111,111,0.1);">Selecione o tipo de pessoa</p>
                    <li>
                      <div class="collapsible-header blue-text">Pessoa Física</div>
                      <div class="collapsible-body">
                        <div class="input-field">
                          <input id="cpf" type="text" name="cpf" class="form-controll" onkeyup="TestaCPF(this);">
                          <label for="cpf">CPF</label>
                        </div>
                      </div>
                    </li>
                    <li>
                      <input type="radio" name="tipo_pessoa" value="j">
                      <div class="collapsible-header green-text">Pessoa Juridica</div>
                      <div class="collapsible-body">
                        <div class="input-field">
                          <input id="cnpj" type="text" name="cnpj" class="form-controll" onkeyup="validarCNPJ(this);"> 
                          <label for="cnpj">CNPJ</label>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="row">
                  <div class="input-field col s">
                    <input id="endereco" type="text" name="endereco_rua" required="true">
                    <label for="endereco">Endereço</label>
                  </div>
                  <div class="input-field col s">
                    <input id="numero" type="number" name="endereco_numero"required="true" max="99999" min="1">
                    <label for="numero">Número</label>
                  </div>
                  <div class="input-field col s">
                    <input type="number" id="cep" name="endereco_cep" class="form-controll" max="99999999" min="1">
                    <label label for="cep">CEP</label>
                  </div>
                  <div class="input-field col s">
                    <input id="complemento" type="text" name="endereco_complemnto">
                    <label for="complemento">Complemento</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s">
                    <input id="username" type="text" name="usuario" required="true">
                    <label for="username">Usuário</label>
                  </div>
                  <div class="input-field col s">
                    <input id="password" type="password" name="senha" required="true">
                    <label for="password">Senha</label>
                  </div>
                  <div class="input-field col s">
                    <input id="confirm_password" type="password" required="true">
                    <label for="password">Confirmar Senha</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s">
                    <input type="date" id="data_nasc" name="data_nascimento" class="date" max="2010-12-31" placeholder="__/__/____">
                    <label for="data_nasc">Data de Nascimento</label>
                  </div>
                  <div class="input-field col s">
                    <input type="date" id="data_cadastro" name="data_cadastro" class="date" min="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d"); ?>" required="true" placeholder="__/__/____">
                    <label for="data_cadastro">Data do Cadastro</label>
                  </div>
                </div>
                <div class="row">
                  <div class="row">
                    <div class="input-field col s">
                      <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Cadastrar<i class="mdi-content-send right"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!--FORM-->
        </div>
      </li>
      <li>
        <div class="collapsible-header btn waves-effect waves-light teal" style="padding: 10px;">Listar</div>
        <div class="collapsible-body">
          <?php
            include('conn/conexao.php');
            
            $consulta = "SELECT * FROM `sologin`.`USUARIOS`;";
            $query_co = mysqli_query($conn, $consulta);
            
            ?>
          <div class="card-panel">
            <h4 class="header2">Lista de usuários</h4>
            <div class="row">
              <table class="responsive-table">
                <thead>
                  <tr style=" background-color: rgba(111,111,111,0.3);">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>CNPJ</th>
                    <th>Data cadastro</th>
                    <th>Usuário</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <?php while($dado = mysqli_fetch_array($query_co)) { ?>
                <tr>
                  <td><?php echo $dado['ID']; ?></td>
                  <td><?php echo $dado['NOME']; ?></td>
                  <td><?php echo $dado['EMAIL']; ?></td>
                  <td><?php echo $dado['CPF']; ?></td>
                  <td><?php echo $dado['CNPJ']; ?></td>
                  <td><?php echo date('d/m/Y', strtotime($dado['DATA_CADASTRO'])); ?></td>
                  <td><?php echo $dado['USUARIO']; ?></td>
                  <td>
                    <a href="editar.php?codigo=<?php echo $dado['ID']; ?>">Editar</a>
                    <a href="deletar.php?codigo=<?php echo $dado['ID']; ?>">Excluir</a>
                  </td>
                </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<?php include "rodape.php"; ?>