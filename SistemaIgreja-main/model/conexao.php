<?php
  //Ocultar o erro
  error_reporting(E_ERROR | E_PARSE);

  class Conexao {
    private $pg_usuario = ''; //usuario banco de dados
    private $pg_senha = ''; //senha banco de dados
    private $pg_caminho = ''; //servidor banco de dados
    private $pg_banco = '';  //nome do banco de dados    
    private $post;

    public function __construct() {


      $this->post = pg_connect("host=$this->pg_caminho dbname=$this->pg_banco user=$this->pg_usuario password=$this->pg_senha") 
        or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
    }

    public function getPost()
    {
      return $this->post;
    }
  }