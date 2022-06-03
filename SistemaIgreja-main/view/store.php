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
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <title>Adnipo - Store</title>

<?php
include('app/includes/menu.php');
?>
</head>
<body>
<div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
  </div>


  <h3 class="made_by">Desenvolvido por Daniel Montanari</h3>
<p></p>
<!-- partial -->
<script src='https://cdn.jsdelivr.net/jquery/latest/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
<script  src="js/main.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        setting-name: setting-value
      });
    });
  </script>
</body>
</html>

<?php
}else{
    header('Location: ./login.php');
}
?>