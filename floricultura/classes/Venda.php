<?php
require_once "../conexaoDB.PHP";

//Classe Venda
class Venda{
  private $id;
  private $codBarras;
  private $id_prod;

  //Construtor
  public function __construct($codBarras, $id_prod){
    $this->codBarras = $codBarras;
    $this->id_prod = $id_prod;
  }

  //getters e setters
  public function getId(){return $this->id;}
  public function getCodBarras(){return $this->codBarras;}
  public function getId_prod(){return $this->id_prod;}

  public function setId($id){$this->id = $id;}
  public function setCodBarras($codBarras){$this->codBarras = $codBarras;}
  public function setId_prod($id_prod){$this->id_prod = $id_prod;}

  // Método CREATE
  public function inserir(){
    $conn = getConexao();
    $stmt = $conn->prepare("INSERT INTO public.venda(codbarras, id_prod) VALUES(:codBarras, :id_prod)");
    $stmt->bindParam(":codBarras", $this->codBarras);
    $stmt->bindParam(":id_prod", $this->id_prod);
    return $stmt->execute();
  }

  // Busca por ID
  public static function buscarPorId(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("SELECT * FROM venda WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Busca todos
  public static function listarTodos() {
    $conn = getConexao();
    $stmt = $conn->query("SELECT * FROM venda");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Metódo UPDATE
  public function atualizar(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("UPDATE venda SET codbarras = :codBarras, id_prod = :id_prod WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":codBarras", $this->codBarras);
    $stmt->bindParam(":id_prod", $this->id_prod);
    return $stmt->execute();
  }

  // Metódo DELETE
  public static function excluir($id) {
    $conn = getConexao();
    $stmt = $conn->prepare("DELETE FROM venda WHERE id = :id");
    $stmt->bindParam(":id", $id);
    return $stmt->execute();
  }
}

?>