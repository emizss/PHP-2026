<?php
require_once "../classes/RealizaVenda.php"; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $notaFiscal     = $_POST['notaFiscal'];
    $id_atendimento      = $_POST['id_atendimento'];
    $id_venda  = $_POST['id_venda'];
    

    $realizaVenda = new RealizaVenda($notaFiscal, $id_atendimento, $id_venda);

    if ($realizaVenda->inserir()) {
        echo "Venda realizada com sucesso!";
    } else {
        echo "Erro ao realizar venda.";
    }
}
?>

