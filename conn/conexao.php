<?php
// Conectar ao servidor MySQL
$conn = mysqli_connect('localhost', 'admin', 'password');
// Conectar ao banco de dados MySQL
$banco = mysqli_select_db($conn,'sistema');

?>