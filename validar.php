<?php
    
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['username']) OR empty($_POST['password']))) {
      header("Location: index.php"); exit;
  }
    
  ?>