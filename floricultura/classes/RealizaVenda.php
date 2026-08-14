<?php
require_once "../conexaoDB.PHP";

//Classe RealizaVenda
class RealizaVenda{
  private $id;
  private $notaFiscal;
  private $id_atendimento;
  private $id_venda;

  //Construtor
  public function __construct($notaFiscal, $id_atendimento, $id_venda){
    $this->notaFiscal = $notaFiscal;
    $this->id_atendimento = $id_atendimento;
    $this->id_venda = $id_venda;
  }

  //getters e setters
  public function getId(){return $this->id;}
  public function getNotaFiscal(){return $this->notaFiscal;}
  public function getId_atendimento(){return $this->id_atendimento;}
  public function getId_venda(){return $this->id_venda;}

  public function setId($id){$this->id = $id;}
  public function setNotaFiscal($notaFiscal){$this->notaFiscal = $notaFiscal;}
  public function setId_atendimento($id_atendimento){$this->id_atendimento = $id_atendimento;}
  public function setId_venda($id_venda){$this->id_venda = $id_venda;}

  // Método CREATE
  public function inserir(){
    $conn = getConexao();
    $stmt = $conn->prepare("INSERT INTO public.realiza_venda(nota_fiscal, id_atendimento, id_venda) VALUES(:notaFiscal, :id_atendimento, :id_venda)");
    $stmt->bindParam(":notaFiscal", $this->notaFiscal);
    $stmt->bindParam(":id_atendimento", $this->id_atendimento);
    $stmt->bindParam(":id_venda", $this->id_venda);
    return $stmt->execute();
  }

  // Busca por ID
  public static function buscarPorId(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("SELECT * FROM realiza_venda WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Busca todos
  public static function listarTodos() {
    $conn = getConexao();
    $stmt = $conn->query("SELECT * FROM realiza_venda");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Metódo UPDATE
  public function atualizar(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("UPDATE realiza_venda SET nota_fiscal = :notaFiscal, id_atendimento = :id_atendimento, id_venda = :id_venda WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":notaFiscal", $this->notaFiscal);
    $stmt->bindParam(":id_atendimento", $this->id_atendimento);
    $stmt->bindParam(":id_venda", $this->id_venda);
    return $stmt->execute();
  }

  // Metódo DELETE
  public static function excluir($id) {
    $conn = getConexao();
    $stmt = $conn->prepare("DELETE FROM realiza_venda WHERE id = :id");
    $stmt->bindParam(":id", $id);
    return $stmt->execute();
  }
}

?>