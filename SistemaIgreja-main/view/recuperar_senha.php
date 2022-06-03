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
    <title>Adnipo - Recuperar senha</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active">Recuperar senha</h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/logo-adnipo.png" id="icon" alt="Adnipo" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="app/login.php">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Digite seu e-mail" required>
      <input type="submit" class="fadeIn fourth" name="enviar" value="Enviar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="login.php">Retornar ao Login</a>
    </div>

  </div>
</div>
    
</body>
</html>