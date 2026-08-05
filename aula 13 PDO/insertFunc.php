<?php
require "conexao.php";
$pdo = getConexao();


$sql = "INSERT INTO public.funcionario(nome, cpf, telefone, data_nasc, curriculo)
        VALUES(:nome, :cpf, :celular, :dataNasc, :curriculo);";

$stmt = $pdo->prepare($sql);

//ETAPA BARREIRA DE DADOS
$nome = $_POST[':nome'];
$cpf = $_POST[':cpf'];
$celular = $_POST[':celular'];
$dataNasc = $_POST[':dataNasc'];
$curriculo = $_POST[':curriculo'];
//$stmt->execute($_POST);
$stmt->execute([
    ':nome' => $nome,
    ':cpf' => $cpf,
    ':celular' => $celular,
    ':dataNasc' => $dataNasc,
    ':curriculo' => $curriculo
]);
echo "Funcionário inserido com ID " . $pdo->lastInsertId();
?>
