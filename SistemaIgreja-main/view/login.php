<?php
session_start();
if (isset($_SESSION['erro'])){
  echo $_SESSION['erro'];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<link rel="shortcut icon" href="img/logo-adnipo.png">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Adnipo - Login</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active">Entrar</h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/logo-adnipo.png" id="icon" alt="Adnipo" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="app/login.php">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario" required>
      <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha" required>
      <input type="submit" class="fadeIn fourth" name="entrar" value="Entrar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="recuperar_senha.php">Esqueceu sua senha?</a>
    </div>

  </div>
</div>
    
</body>
</html>