<?php

class Produto{
  private $db;
  public function __construct($db){
    $this->db = $db;
  }

  public function buscarTodos(){
    $stmt = $this->db->query("SELECT * FROM produto");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}