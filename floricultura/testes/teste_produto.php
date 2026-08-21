<?php

require_once '../classes/Produto.php';

$produto = new Produto();

$produto->setNome('Adubo');
$produto->setCategoria('B');
$produto->setDescricao('Adubo para plantas');
$produto->setCodBarras('111111111');
if(!$produto-setQtd(100);){
  echo 'Quantidade tem que ser maior que zero';
}
if(!!!$produto->setPreco(30)){
    echo 'Preço tem que ser maior que zero';
}else{
    $produto->save();
    echo 'salvo com sucesso';
}