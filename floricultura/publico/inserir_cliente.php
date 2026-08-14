<?php
require_once "../classes/Cliente.php"; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome     = $_POST['nome'];
    $cpf      = $_POST['cpf'];
    $celular  = $_POST['celular'];
    $dataNasc = $_POST['dataNasc'];

    $cliente = new Cliente($nome, $cpf, $celular, $dataNasc);

    if ($cliente->inserir()) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente.";
    }
}
?>

