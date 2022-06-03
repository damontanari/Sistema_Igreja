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
  <link rel="stylesheet" type="text/css" href="css/louvores.css">
  <title>Adnipo - Louvores</title>

<?php
include('app/includes/menu.php');
?>
</head>
<body>
<div class="louvores">
  <h1> PlayList | ADNIPO - Marília</h1>
  <ul class="cards">
    <li class="cards_item">
    <iframe src="https://open.spotify.com/embed/playlist/6OEjV0PGUiK20ff5daSgzM?utm_source=generator" width="100%" height="390" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
    </li>

  </ul>
</div>

<h3 class="made_by">Desenvolvido por Daniel Montanari</h3>
<p></p>
<!-- partial -->
<script src='https://cdn.jsdelivr.net/jquery/latest/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
<script  src="js/main.js"></script>

</body>
</html>

<?php
}else{
    header('Location: ./login.php');
}
?>