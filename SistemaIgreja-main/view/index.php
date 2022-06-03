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
  <title>Adnipo</title>

<?php
include('app/includes/menu.php');
?>
</head>
<body>
<!-- partial:index.partial.html -->

<!--//Comeco da pagina//-->
<div class="app-wrapper">
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">  
			    <h1 class="app-page-title"></h1>
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Bem vindo(a)</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        <div>
										O Adnipo Manager é uma plataforma de gerenciamento desenvolvida para a Adnipo de Marília.
										Essa plataforma tem como principal intuito ressaltar os dados e indicadores mais importantes para a administração e gerenciamento.
										Nesta primeira versão são apresentadas as seguintes ferramentas.
										<p></p> 
										<p>	
										1-) Home
										</p>
										<p>
										2-) Membros
										</p>
										<p>
										3-) Administrativo
										</p>
										<p>
										4-) Reuniões
										</p>
										<p>
										5-) Departamentos
										</p>
										<p>
										6-) Próximos Eventos
										</p>
										<p>
										7-) AdnipoStore
										</p>
										<p>
										8-) Sair
										</p>

											Desenvolvido por: (<a class="app-link" href="https://www.linkedin.com/in/daniel-montanari-52110a219" target="_blank">Daniel Montanari</a>.)</div>
							    </div><!--//col-->
					    </div><!--//app-card-body-->
				    </div><!--//inner-->
			    </div><!--//app-card-->
			    <div class="row g-4 mb-4">

			    </div><!--//row-->

		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	    
    </div><!--//app-wrapper-->
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