<?php
require_once "config.php";

$modulo = $_GET['modulo'] ?? 'produto';
$acao =   $_GET['acao']   ??  'listar';

$controllerName = ucfirst($modulo) . "Controller";
$arquivoController = "controllers/{$controllerName}.php"; ///cudido problema de seguranca

if(file_exists($arquivoController)){
  require_once $arquivoController;
  $controller = new $controllerName($db);

  if(method_exists($controller, $acao)){
    $controller->$acao();

  }else{
    echo "Ação não encontrada";
  }

}else{
  echo "Página não encontrada 404";
}

?>