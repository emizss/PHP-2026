<?php
require_once "../conexaoDB.PHP";
//Criação da classe Funcionario 
class Funcionario{
  private $id;
  private $cpf;
  private $dataNasc;
  private $nome;
  private $celular;
  private $curriculo;

  //Construtor
  public function __construct($cpf, $dataNasc, $nome, $celular, $curriculo){
    $this->cpf = $cpf;
    $this->dataNasc = $dataNasc;
    $this->nome = $nome;
    $this->celular = $celular;
    $this->curriculo = $curriculo;
    
  }
  //getters e setters
  public function getId(){return $this->id;}
  public function getNome(){return $this->nome;}
  public function getCpf(){return $this->cpf;}
  public function getCelular(){return $this->celular;}
  public function getDataNasc(){return $this->dataNasc;}
  public function getCurriculo(){return $this->curriculo;}

  public function setId($id){$this->id = $id;}
  public function setNome($nome){$this->nome = $nome;}
  public function setCpf($cpf){$this->cpf = $cpf;}
  public function setCelular($celular){$this->celular = $celular;}
  public function setDataNasc($dataNasc){$this->dataNasc = $dataNasc;}
  public function setCurriculo($curriculo){$this->curriculo = $curriculo;}

  // Método CREATE
  public function inserir(){
    $conn = getConexao();
    $stmt = $conn-> prepare("INSERT INTO public.funcionario(nome, cpf, telefone, data_nasc, curriculo) VALUES(:nome, :cpf, :celular, :dataNasc, :curriculo)");
    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":cpf", $this->cpf);
    $stmt->bindParam(":celular", $this->celular);
    $stmt->bindParam(":dataNasc", $this->dataNasc);
    $stmt->bindParam(":curriculo", $this->curriculo);
    return $stmt->execute();
  }

  // Busca por ID
  public static function buscarPorId(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("SELECT * FROM funcionario WHERE id_funcionario = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Busca todos
  public static function listarTodos() {
    $conn = getConexao();
    $stmt = $conn->query("SELECT * FROM funcionario");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Metódo UPDATE
  public function atualizar(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("UPDATE funcionario SET nome = :nome, cpf = :cpf, telefone = :celular, data_nasc = :dataNasc, curriculo = :curriculo WHERE id_funcionario = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":cpf", $this->cpf);
    $stmt->bindParam(":celular", $this->celular);
    $stmt->bindParam(":dataNasc", $this->dataNasc);
    $stmt->bindParam(":curriculo", $this->curriculo);
    return $stmt->execute();
  }

  // Metódo DELETE
  public static function excluir($id) {
    $conn = getConexao();
    $stmt = $conn->prepare("DELETE FROM funcionario WHERE id_funcionario = :id");
    $stmt->bindParam(":id", $id);
    return $stmt->execute();
  }
}
  
?>