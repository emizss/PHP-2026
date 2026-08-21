<?php
require_once "../classes/Cliente.php"; 


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $nome     = $_POST['nome'];
    $cpf      = $_POST['cpf'];
    $celular  = $_POST['celular'];
    $dataNasc = $_POST['dataNasc'];

    listarTodos()

    
}
?>

