<?php
session_start();
if(isset($_SESSION['validacao'])){

?>

<!DOCTYPE html>
<html lang="pt-BR" >
<link rel="shortcut icon" href="img/logo-adnipo.png">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/portal.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/agenda.css">
  <title>Adnipo - Agenda</title>

<?php
include('app/includes/menu.php');
?>
</head>

<body>

<h3 class="made_by">Desenvolvido por Daniel Montanari</h3>
<p></p>

<script src='https://cdn.jsdelivr.net/jquery/latest/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
<script  src="js/main.js"></script>
<script  src="js/agenda.js"></script>

</body>
</html>

<?php
}else{
    header('Location: ./login.php');
}
?>