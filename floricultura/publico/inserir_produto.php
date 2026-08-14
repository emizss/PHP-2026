<?php
require_once "../classes/Produto.php"; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome     = $_POST['nome'];
    $categoria      = $_POST['categoria'];
    $descricao  = $_POST['descricao'];
    $preco = $_POST['preco'];
    $qtd = $_POST['qtd'];
    $codBarras = $_POST['codBarras'];

    $produto = new Produto($nome, $categoria, $descricao, $preco, $qtd, $codBarras);

    if ($produto->inserir()) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar produto.";
    }
}
?>

