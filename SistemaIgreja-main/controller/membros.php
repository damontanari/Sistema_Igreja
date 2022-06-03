<?php

  $conexao = new Conexao();

  //Receber o numero da pagina
  $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
  $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
  //Setar a quantidade de itens por pagina
  $qnt_result_pg = 5;
  //calcular o inicio visualização
  $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

  $result_usuarios = "SELECT * FROM db_users LIMIT $qnt_result_pg OFFSET $inicio";
  $resultado_usuarios = pg_query($conexao->getPost(),$result_usuarios);

  while($row_usuario = pg_fetch_assoc($resultado_usuarios)){
    ?>

    <tbody>
                <tr ng-repeat="data in information | filter:search">
                    <td><input type="checkbox" ng-model="data.check" ng-checked="checkAll"></td>
                    <td><?php echo $row_usuario['id'];?></td>
                    <td><?php echo $row_usuario['nome'];?></td>
                    <td><?php echo $row_usuario['email'];?></td>
                    <td><?php echo $row_usuario['fkcargo'];?></td>
                    <td>
                        <span class="fa fa-edit" aria-hidden="true" ng-click="editInfo(data)"><br><small>Edit</small></span>
                    </td>
                    <td>
                        <span class="fa fa-trash" aria-hidden="true" ng-click="deleteInfo(data)"><br><small>Delete</small></span>
                    </td>
                </tr>
            </tbody>
 <?php }


  //Paginação - Somar a quantidade de usuários
  $result_pg = "SELECT COUNT(id) AS num_result FROM db_users";
  $resultado_pagina = pg_query($conexao->getPost(),$result_pg);
  $row_pg = pg_fetch_assoc($resultado_pagina);
  var_dump($row_usuario);
  //echo $row_pg['num_result'];
  //Quantidade de paginas
  $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

  //Limitar os link antes e depois
  $max_links = 2;
  echo "<a href='membros.php?pagina=1'> Primeira </a>";

  for($pag_anterior = $pagina - $max_links; $pag_anterior <= $pagina - 1; $pag_anterior++){
    if($pag_anterior >= 1){
      echo "<a href='membros.php?pagina=$pag_anterior'>$pag_anterior </a>";
    }
  }

  for($pag_depois = $pagina + 1; $pag_depois <= $pagina + $max_links; $pag_depois++){
    if($pag_depois <= $quantidade_pg){
      echo "<a href='membros.php?pagina=$pag_depois'>$pag_depois </a>";
    }
  }

  echo "$pagina";
  echo "<a href='membros.php?pagina=$quantidade_pg'> Última </a>";
  ?>