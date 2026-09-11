<?php
require_once "autoload.php";

class ProdutoController
{
  private $db;
  public function __construct($db){
    $this->db = $db;
  }

  public function listar()
  {
    $model = new Produto($this->db);
    $produtos = $model->buscarTodos();

    require_once "Views/produto/produto_listar.php";
  }

}

?>