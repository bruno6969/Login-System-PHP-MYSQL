<?php
include('protecao.php');
include('conn/conexao.php');
$_POST = protect($_POST);

if (!empty($_POST)) {
    $nome                = $_POST['nome'];
    $nivel               = $_POST['nivel'];
    $email               = $_POST['email'];
    $telefone            = $_POST['telefone'];
    $cpf                 = $_POST['cpf'];
    $cnpj                = $_POST['cnpj'];
    $endereco_rua        = $_POST['endereco_rua'];
    $endereco_numero     = $_POST['endereco_numero'];
    $endereco_cep        = $_POST['endereco_cep'];
    $endereco_complemnto = $_POST['endereco_complemnto'];
    $usuario             = $_POST['usuario'];
    $senha               = sha1($_POST['senha']);
    $data_nascimento     = $_POST['data_nascimento'];
    $data_cadastro       = $_POST['data_cadastro'];
    
    // Verificar se usuário já existe
    $consulta = "SELECT * FROM `USUARIOS` WHERE (`CPF` = '$cpf') AND (`CNPJ` = '$cnpj')";
    $query_co = mysqli_query($conn, $consulta);
    
    if (mysqli_num_rows($query_co) > 0) {
        // Usuário existe
        // Mensagem de erro quando o usuário foi encontrado
        echo "<script language='javascript' type='text/javascript'>alert('Esse cadastro já existe');window.location.href='admin.php';</script>";
        die();
        
    } else {
        // Usuário não existe
        $inserir = "INSERT INTO `USUARIOS` (`ID`, `NIVEL`, `NOME`, `EMAIL`, `TELEFONE`, `TIPO_PESSOA`, `CPF`, `CNPJ`, `ENDERECO_RUA`, `ENDERECO_NUM`, `ENDERECO_CEP`, `ENDERECO_COMPLEMENTO`, `USUARIO`, `SENHA`, `DATA_NASCIMENTO`, `DATA_CADASTRO`, `CADASTRO_ATIVO`) VALUES (NULL, '$nivel', '$nome', '$email', '$telefone', 'F', '$cpf', '$cnpj', '$endereco_rua', '$endereco_numero', '$endereco_cep', '$endereco_complemento', '$usuario', '$senha', '$data_nascimento', '$data_cadastro', '1')";
        
        $query = mysqli_query($conn, $inserir);
        echo "<script language='javascript' type='text/javascript'>alert('Cadastrado com sucesso!');window.location.href='admin.php';</script>";
        die();
    }
}
?>

