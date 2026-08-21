<?php

require_once '../classes/Produto.php';

$produto = new Produto();

$produto->setNome('Adubo');
$produto->setCategoria('B');
$produto->setDescricao('Adubo para plantas');
$produto->setCodBarras('111111111');
$produto->setQtd(100);
$produto->setPreco(30);
// if(!){
//     echo 'Quantidade tem que ser maior que zero';
// }
// if(!!!){
//     echo 'Preço tem que ser maior que zero';
// }else{
     $produto->inserir();
//     echo 'salvo com sucesso';
// }

var_dump(Produto::listarTodos());