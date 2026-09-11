<?php
require_once "../conexao.DB.php";
function carregar($classe) {

    $caminho = "src/Models/" . $classe . ".php";

    if (file_exists($caminho)) {
    
        require_once $caminho;
    } else {
        echo "Erro: O arquivo para a classe '{$classe}' não foi encontrado no caminho: {$caminho}";
    }
}

spl_autoload_register('carregar');


