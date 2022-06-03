<?php

require'conexao.php';

if (isset($_POST['entrar'])){
    $conexao = new Conexao();
    //$usuario = $_POST['login'];
    $usuario = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $senha = addslashes(md5($_POST['senha']));

    $sql = "SELECT * FROM db_users WHERE usuario = '$usuario' AND pass = '$senha' ";
    $executa = pg_query($conexao->getPost(),$sql);
    session_start();
    if (pg_num_rows($executa)>0){
        $_SESSION['validacao']= 'ok';
        $_SESSION['erro'] = '';
        header('Location: ../index.php');
    }
    else{
        $_SESSION['erro'] = 'Senha incorreta'; 
        header('Location: ../login.php');
    }


}else{
    header('Location: ../login.php');
}
?>