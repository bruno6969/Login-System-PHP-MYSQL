<?php include 'cabecalho.php';?>
<!--Form Advance-->          
<div class="row">
	<div class="col s12 m12 l12">
		<div class="card-panel">
			<h4 class="header2">Formulário para cadastro de usuário</h4>
			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s6">
							<input id="first_name" type="text" required="true">
							<label for="first_name">Nome completo</label>
						</div>
						<div class="input-field col s6">
							<input id="email" type="email" required="true">
							<label for="email">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s2">
							<input id="tel" type="text" class="form-controll" data-mask="(__) _____-____" value='(__) _____-____'/>
							<label for="tel">Telefone</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="radiocpf" type="radio" name="opt"  class="form-controll" value="cpf">
							<label for="radiocpf" onclick="ShowCPF();">Pessoa Física</label>
						</div>
						<div class="input-field col s">
							<input id="radiocnpj" type="radio" name="opt" class="form-controll" value="cnpj">
							<label for="radiocnpj" onclick="ShowCNPJ()";>Pessoa Juridica</label>
						</div>
					</div>
					<div class="row">
						<div id="divcpf">
							<div class="input-field col s6">
								<input id="cpf" type="text" class="form-controll"  disabled="true" data-mask="___.___.___-__" value='___.___.___-__'/>
								<label for="cpf">CPF</label>
							</div>
						</div>
						<div id="divcnpj">
							<div class="input-field col s6">
								<input id="cnpj" type="text" name="cnpj" disabled="true" class="form-controll" data-mask="__.___.___/____-__" value='__.___.___/____-__'/ > 
								<label for="cnpj">CNPJ</label>
							</div>
						</div>						
					</div>
					<div class="row">
						<div class="input-field col s5">
							<input id="endereco" type="text" required="true">
							<label for="endereco">Endereço</label>
						</div>
						<div class="input-field col s2">
							<input id="numero" type="number" required="true" max="99999" min="1" size="4">
							<label for="numero">Número</label>
						</div>
						<div class="input-field col s2">
							<input name="cep" type="text" id="cep" value="" size="10" maxlength="9" data-mask="00000-000"/>
							<label for="cep">CEP</label>
						</div>
						<div class="input-field col s3">
							<input id="complemento" type="text" required="true">
							<label for="complemento">Complemento</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="username" type="text" required="true">
							<label for="username">Usuário</label>
						</div>
						<div class="input-field col s6">
							<input id="password" type="password" required="true">
							<label for="password">Senha</label>
						</div>
					</div>
					<!--<div class="row">
						<div class="input-field col s6">
							<select>
								<option value="0" selected>Choose your profile</option>
								<option value="1">Manager</option>
								<option value="2">Developer</option>
								<option value="3">Business</option>
							</select>
							<label>Select Profile</label>
						</div>                        
						<div class="input-field col s6">
							<input type="date" class="datepicker">
							<label for="dob">DOB</label>
						</div>

					</div>

					<div class="row">
						<div class="file-field input-field col s6">
							<input class="file-path validate" type="text"/>
							<div class="btn">
								<span>Age</span>
								<input type="file" />
							</div>
						</div>
						<div class="input-field col s6">                          
							<span>Image</span>
							<p class="range-field">
								<input type="range" id="test5" min="0" max="100" />
							</p>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="message5" class="materialize-textarea" length="120"></textarea>
							<label for="message">Message</label>
						</div>-->
						<div class="row">
							<div class="input-field col s12">
								<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
									<i class="mdi-content-send right"></i>
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/MascaraValidacao.js"></script>

<?php include 'rodape.php';?>