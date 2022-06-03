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
  <link rel="stylesheet" type="text/css" href="css/resumos.css">
  <link rel="stylesheet" type="text/css" href="css/modal_resumos.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Adnipo - Resumos</title>

<?php
include('app/includes/menu.php');
?>
</head>
<body>
<div class="resumo">
  <h1></h1>
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=10"></div>
        <div class="card_content">
          <h2 class="card_title">TEMA DO ENCONTRO</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout </p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Launch demo modal
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Encontro dia 16/12/2021</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">Tema: Apocalipse</div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <a href="#" button class="btn_lermais card_btn" >Ler mais</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <a href="#" button class="btn_lermais card_btn" >Ler mais</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <a href="#" button class="btn_lermais card_btn" >Ler mais</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <a href="#" button class="btn_lermais card_btn" >Ler mais</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <a href="#" button class="btn_lermais card_btn" >Ler mais</a>
        </div>
      </div>
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