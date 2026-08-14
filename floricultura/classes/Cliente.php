<?php
require_once "../conexaoDB.PHP";
//Criação da classe cliente (usuario)
class Cliente{
  private $id;
  private $nome;
  private $cpf;
  private $celular;
  private $dataNasc;
}
//Construtor
public function __construct($nome, $cpf, $celular, $dataNasc){
  $this->nome = $nome;
  $this->cpf = $cpf;
  $this->celular = $celular;
  $this->dataNasc = $dataNasc;
}
 //getters e setters
public function getId(){return $this->id;}
public function getNome(){return $this->nome;}
public function getCpf(){return $this->cpf;}
public function getCelular(){return $this->celular;}
public function getDataNasc(){return $this->dataNasc;}

public function setId($id){$this->id = $id;}
public function setNome($nome){$this->nome = $nome;}
public function setCpf($cpf){$this->cpf = $cpf;}
public function setCelular($celular){$this->celular = $celular;}
public function setDataNasc($dataNasc){$this->dataNasc = $dataNasc;}

// Método CREATE
public function inserir(){
  $conn = getConexao();
  $stmt = $conn-> prepare("INSERT INTO public.cliente(nome, cpf , telefone, data_nasc)VALUES(:nome, :cpf, :celular, :dataNasc)");
  $stmt->bindParam(":nome", $this->nome);
  $stmt->bindParam(":cpf", $this->cpf);
  $stmt->bindParam(":celular", $this->celular);
  $stmt->bindParam(":dataNasc", $this->dataNasc);
  return $stmt->execute();
}

// Busca por ID
public static function buscarPorId(int $id) {
  $conn = getConexao();
  $stmt = $conn->prepare("SELECT * FROM cliente WHERE id = :id");
  $stmt->bindParam(":id", $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Busca todos
public static function listarTodos() {
  $conn = getConexao();
  $stmt = $conn->query("SELECT * FROM cliente");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Metódo UPDATE
public function atualizar(int $id) {
  $conn = getConexao();
  $stmt = $conn->prepare("UPDATE cliente SET nome = :nome, cpf = :cpf, telefone =: celular, data_nasc =: dataNasc WHERE id = :id");
  $stmt->bindParam(":id", $id);
  $stmt->bindParam(":nome", $this->nome);
  $stmt->bindParam(":cpf", $this->cpf);
  $stmt->bindParam(":celular", $this->celular);
  $stmt->bindParam(":dataNasc", $this->dataNasc);
  return $stmt->execute();
}

// Metódo DELETE
public static function excluir($id) {
  $conn = getConexao();
  $stmt = $conn->prepare("DELETE FROM cliente WHERE id = :id");
  $stmt->bindParam(":id", $id);
  return $stmt->execute();
}

  
?>