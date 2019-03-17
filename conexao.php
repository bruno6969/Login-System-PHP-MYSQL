<?php
// Tenta se conectar ao servidor MySQL
$conn = mysqli_connect('localhost', 'admin', 'password');
// Tenta se conectar a um banco de dados MySQL
$banco = mysqli_select_db($conn,'sistema');
?>