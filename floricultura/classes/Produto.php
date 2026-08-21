<?php
require_once "../conexaoDB.php";

//Classe produto
class Produto{
  private $id;
  private $nome;
  private $categoria;
  private $descricao;
  private $preco;
  private $qtd;
  private $codBarras;

  //Construtor
  // public function __construct($nome, $categoria, $descricao, $preco, $qtd, $codBarras){
  //   $this->nome = $nome;
  //   $this->categoria = $categoria;
  //   $this->descricao = $descricao;
  //   $this->preco = $preco;
  //   $this->qtd = $qtd;
  //   $this->codBarras = $codBarras;
  // }

  //getters e setters
  public function getId(){return $this->id;}
  public function getNome(){return $this->nome;}
  public function getCategoria(){return $this->categoria;}
  public function getDescricao(){return $this->descricao;}
  public function getPreco(){return $this->preco;}
  public function getQtd(){return $this->qtd;}
  public function getCodBarras(){return $this->codBarras;}

  public function setId($id){$this->id = $id;}
  public function setNome($nome){$this->nome = $nome;}
  public function setCategoria($categoria){$this->categoria = $categoria;}
  public function setDescricao($descricao){$this->descricao = $descricao;}
  public function setPreco($preco){$this->preco = $preco;}
  public function setQtd($qtd){
    $this->qtd = $qtd;
  }
  public function setCodBarras($codBarras){$this->codBarras = $codBarras;}

  // Método CREATE
  public function inserir(){
    $conn = getConexao();
    $stmt = $conn->prepare("INSERT INTO public.produto(nome, categoria, descricao, preco, qtd, codbarras) VALUES(:nome, :categoria, :descricao, :preco, :qtd, :codBarras)");
    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":categoria", $this->categoria);
    $stmt->bindParam(":descricao", $this->descricao);
    $stmt->bindParam(":preco", $this->preco);
    $stmt->bindParam(":qtd", $this->qtd);
    $stmt->bindParam(":codBarras", $this->codBarras);
    return $stmt->execute();
  }

  // Busca por ID
  public static function buscarPorId(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("SELECT * FROM produto WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Busca todos
  public static function listarTodos() {
    $conn = getConexao();
    $stmt = $conn->query("SELECT * FROM produto");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Metódo UPDATE
  public function atualizar(int $id) {
    $conn = getConexao();
    $stmt = $conn->prepare("UPDATE produto SET nome = :nome, categoria = :categoria, descricao = :descricao, preco = :preco, qtd = :qtd, codbarras = :codBarras WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":categoria", $this->categoria);
    $stmt->bindParam(":descricao", $this->descricao);
    $stmt->bindParam(":preco", $this->preco);
    $stmt->bindParam(":qtd", $this->qtd);
    $stmt->bindParam(":codBarras", $this->codBarras);
    return $stmt->execute();
  }

  // Metódo DELETE
  public static function excluir($id) {
    $conn = getConexao();
    $stmt = $conn->prepare("DELETE FROM produto WHERE id = :id");
    $stmt->bindParam(":id", $id);
    return $stmt->execute();
  }
}

?>