<?php include 'cabecalho-user.php';?>
<!--FORM-->          
<div class="row">
  <div class="col s12 m12 l12">
    <div class="card-panel">
      <h4 class="header2">Formulário para cadastro de usuário</h4>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s">
              <select>
                <option value="0" selected>Tipo de Usuário</option>
                <option value="0">Cliente</option>
                <option value="1">Supervisor</option>
                <option value="2">Administrador</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s">
              <input id="full_name" type="text" required="true">
              <label for="full_name">Nome completo</label>
            </div>
            <div class="input-field col s">
              <input id="email" type="email" required="true">
              <label for="email">Email</label>
            </div>
            <div class="input-field col s">
              <input id="tel" type="text" class="form-controll" data-mask="(__) _____-____" value='(__) _____-____'/>
              <label for="tel">Telefone</label>
            </div>
          </div>
          <div class="row">
            <ul class="collapsible col s">
              <p class="red-text" style="padding: 10px; background-color: rgba(111,111,111,0.1);">Selecione o tipo de pessoa</p>
              <li>
                <div class="collapsible-header blue-text">Pessoa Física</div>
                <div class="collapsible-body">
                  <div class="input-field">
                    <input id="cpf" type="text" class="form-controll" data-mask="___.___.___-__" value='___.___.___-__'/>
                    <label for="cpf">CPF</label>
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header green-text">Pessoa Juridica</div>
                <div class="collapsible-body">
                  <div class="input-field">
                    <input id="cnpj" type="text" name="cnpj" class="form-controll" data-mask="	__.___.___/____-__" value='__.___.___/____-__'/ > 
                    <label for="cnpj">CNPJ</label>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="input-field col s">
              <input id="endereco" type="text" required="true">
              <label for="endereco">Endereço</label>
            </div>
            <div class="input-field col s">
              <input id="numero" type="number" required="true" max="99999" min="1">
              <label for="numero">Número</label>
            </div>
            <div class="input-field col s">
              <input name="cep" type="number" id="cep" class="form-controll" max="99999999" min="1">
              <label label for="cep">CEP</label>
            </div>
            <div class="input-field col s">
              <input id="complemento" type="text" required="true">
              <label for="complemento">Complemento</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s">
              <input id="username" type="text" required="true">
              <label for="username">Usuário</label>
            </div>
            <div class="input-field col s">
              <input id="password" type="password" required="true">
              <label for="password">Senha</label>
            </div>
            <div class="input-field col s">
              <input id="confirm_password" type="password" required="true">
              <label for="password">Confirmar Senha</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s">
              <input type="date" id="data_nasc" class="date" max="2001-01-01" placeholder="__/__/____">
              <label for="data_nasc">Data de Nascimento</label>
            </div>
            <div class="input-field col s">
              <input type="date" id="data_cadastro" class="date" min="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d"); ?>" required="true" placeholder="__/__/____">
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
  </div>
</div>
<?php include 'rodape.php';?>