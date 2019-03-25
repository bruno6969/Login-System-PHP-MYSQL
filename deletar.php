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

include('conn/conexao.php');

$id_user = intval($_GET['codigo']);

$sql = "DELETE FROM `USUARIOS` WHERE `ID` = '$id_user'";
$query = mysqli_query($conn, $sql);

if ($query){
	echo "<script>location.href='admin.php';</script>";
} else {
	echo "<script>alert('Não foi possível deletar  o usuário!');</script>";
}

?>