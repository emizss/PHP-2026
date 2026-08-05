<?php
require "conexao.php";
$pdo = getConexao();


$sql = "INSERT INTO public.cliente( nome, cpf , telefone, data_nasc)
        VALUES(:nome, :cpf, :celular, :dataNasc);";

$stmt = $pdo->prepare($sql);

//ETAPA BARREIRA DE DADOS
$nome = $_POST[':nome'];
$cpf = $_POST[':cpf'];
$celular = $_POST[':celular'];
$dataNasc = $_POST[':dataNasc'];

//$stmt->execute($_POST);
$stmt->execute([
    ':nome' => $nome,
    ':cpf' => $cpf,
    ':celular' => $celular,
    ':dataNasc' => $dataNasc
]);
echo "Cliente inserido com ID " . $pdo->lastInsertId();
?>
