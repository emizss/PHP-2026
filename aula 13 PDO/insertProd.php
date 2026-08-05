<?php
require "conexao.php";
$pdo = getConexao();

$sql = "INSERT INTO public.produto(nome, categoria, descricao, preco, qtd, codBarras)
        VALUES(:nome, :categoria, :descricao, :preco, :qtd, :codB);";

$stmt = $pdo->prepare($sql);

//ETAPA BARREIRA DE DADOS
$nome = $_POST[':nome'];
$categoria= $_POST[':categoria'];
$descricao = $_POST[':descricao'];
$preco = $_POST[':preco'];
$qtd = $_POST[':qtd'];
$codB = $_POST[':codB'];
//$stmt->execute($_POST);
$stmt->execute([
    ':nome' => $nome,
    ':categoria' => $categoria,
    ':descricao' => $descricao,
    ':preco' => $preco,
    ':qtd' => $qtd,
    ':codB' => $codB
]);
echo "Produto inserido com ID " . $pdo->lastInsertId();
?>
