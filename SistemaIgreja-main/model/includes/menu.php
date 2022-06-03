<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
<link rel="stylesheet" href="css/main.css">

<header class="nav-bar">
        
  <div class="hamburger">
    <span class="hamburger-bars"></span>
  </div>
  
  <img src="img/logo-adnipo.png" class="img-responsive" width="40" height="38" style="margin-left: 4rem;">
  <h1>Adnipo</h1>
            <form class="" action="app/logout.php" method="POST" style="width: 100%;">
                <button class="btn btn-logout btn-danger" style="background-color: #003154 !important;"><i class="uil-signout"></i><Strong>Sair</Strong></button>
            </form>
  
  <ul class="ham-menu">
    <p></p>
    <li><a href="index.php"><i style="margin-left: 30px;" class="fas fa-home mr-3"></i><strong>Home</strong></a></li>
  
  <!-- MENU ADMINISTRADOR -->

    <li><a href="membros.php"><i style="margin-left: 30px;" class="fas fa-users-cog mr-3"></i><strong>Membros</strong></a></li>


    <li><a href="#" data-toggle="collapse" style="margin-left: 30px;" data-target="#demo2"><i class="fas fa-calculator mr-3"></i><strong>Administrativo</strong><i class="fas fa-sort-down mr-3"></i></a></li>
    <div id="demo2" class="collapse" style="margin-left: 70px;">
          <li><a href="/"><i class="fas fa-columns mr-3"></i><strong>Dashboard</strong></a></li>
          <li><a href="/"><i class="fas fa-coins mr-3"></i><strong>Financeiro</strong></a></li>
          <li><a href="/"><i class="fas fa-hand-holding-usd mr-3"></i></i><strong>Controle</strong></a></li>
          <li><a href="/"><i class="fas fa-chart-bar mr-3"></i></i><strong>Analítico</strong></a></li>
          <li><a href="/"><i class="fas fa-suitcase mr-3"></i><strong>Inventário</strong></a></li>
    </div>

    <li><a href="#" data-toggle="collapse" style="margin-left: 30px;" data-target="#demo3"><i class="fas fa-praying-hands mr-3"></i><strong>Reuniões</strong><i class="fas fa-sort-down mr-3"></i></a></li>
    <div id="demo3" class="collapse" style="margin-left: 70px;">
          <li><a href="louvores.php"><i class="fas fa-headphones mr-3"></i><strong>Louvores</strong></a></li>
          <li><a href="resumos.php"><i class="fas fa-poll-h mr-3"></i><strong>Resumos</strong></a></li>
    </div>

    <li><a href="#" data-toggle="collapse" style="margin-left: 30px;" data-target="#demo4"><i class="fas fa-warehouse mr-3"></i><strong>Departamentos</strong><i class="fas fa-sort-down mr-3"></i></a></li>
    <div id="demo4" class="collapse" style="margin-left: 70px;">
          <li><a href="/"><i class="fas fa-book-reader mr-3"></i><strong>Lideranças</strong></a></li>
          <li><a href="/"><i class="fas fa-music mr-3"></i><strong>Ministério Louvores</strong></a></li>
          <li><a href="/"><i class="fas fa-baby mr-3"></i><strong>Infantil</strong></a></li>
          <li><a href="/"><i class="fas fa-users mr-3"></i><strong>Jovens</strong></a></li>
    </div>

    <li><a href="#" data-toggle="collapse" style="margin-left: 30px;" data-target="#demo5"><i class="fas fa-bullhorn mr-3"></i><strong>Próximos Eventos</strong><i class="fas fa-sort-down mr-3"></i></a></li>
    <div id="demo5" class="collapse" style="margin-left: 70px;">
          <li><a href="agenda.php"><i class="far fa-calendar-alt mr-3"></i><strong>Agenda</strong></a></li>
    </div>


    <li><a href="store.php"><i style="margin-left: 30px;" class="fas fa-shopping-cart mr-3"></i><strong>AdnipoStore</strong></a></li>


    <li><a href="app/logout.php" style="margin-left: 30px;"><i class="fas fa-times mr-3"></i><strong>Sair</strong></a></li>
  </ul>
  
</header>