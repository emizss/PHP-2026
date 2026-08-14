<?php
require_once "../conexaoDB.PHP";

//Classe atendimento
class Atendimento{
  private $id;
  private $id_cliente;
  private $id_funcionario;

  //Construtor 
  public function __construct($id_cliente, $id_funcionario){
    $this->id_cliente = $id_cliente;
    $this->id_funcionario = $id_funcionario;
  }

  //getters e setters
  public function getId(){return $this->id;}
  public function getId_cliente(){return $this->id_cliente;}
  public function getId_funcionario(){return $this->id_funcionario;}

  public function setId($id){return $this->id = $id;}
  public function setId_cliente($id_cliente){return $this->id_cliente = $id_cliente;}
  public function setId_funcionario($id_funcionario){return $this->id_funcionario = $id_funcionario;}

  //CREATE
  public function inserir(){
    $conn = getConexao();
    $stmt = $conn-> prepare("INSERT INTO public.atendimento(id_cliente, id_funcionario) VALUES(:id_cliente, :id_funcionario)");
    $stmt->bindParam(":id_cliente", $this->id_cliente);
    $stmt->bindParam(":id_funcionario", $this->id_funcionario);
    return $stmt->execute();
  }

  // Busca por ID
  public static function buscarPorId(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("SELECT * FROM atendimento WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Busca todos
  public static function listarTodos() {
    $conn = getConexao();
    $stmt = $conn->query("SELECT * FROM atendimento");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Metódo UPDATE
  public function atualizar(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("UPDATE atendimento SET id_cliente = :id_cliente, id_funcionario = :id_funcionario WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":id_cliente", $this->id_cliente);
    $stmt->bindParam(":id_funcionario", $this->id_funcionario);
    return $stmt->execute();
  }

  // Metódo DELETE
  public static function excluir($id) {
    $conn = getConexao();
    $stmt = $conn->prepare("DELETE FROM atendimento WHERE id = :id");
    $stmt->bindParam(":id", $id);
    return $stmt->execute();
  }
}

?>