<?php
require_once "../classes/Funcionario.php"; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome     = $_POST['nome'];
    $cpf      = $_POST['cpf'];
    $celular  = $_POST['celular'];
    $dataNasc = $_POST['dataNasc'];
    $curriculo = $_POST['curriculo'];

    $funcionario = new Funcionario($nome, $cpf, $celular, $dataNasc, $curriculo);

    if ($funcionario->inserir()) {
        echo "Funcionário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar funcionário.";
    }
}
?>

