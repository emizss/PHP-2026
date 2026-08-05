<?php
require "conexao.php";
$pdo = getConexao();

$sqlFunc = "SELECT * FROM funcionario ";
$stmtFunc = $pdo->prepare($sqlFunc);
$stmtFunc->execute();
$resultadoFunc = $stmtFunc->fetchall();

$sqlCli = "SELECT * FROM cliente ";
$stmtCli = $pdo->prepare($sqlCli);
$stmtCli->execute();
$resultadoCli = $stmtCli->fetchall();
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="venda.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>Selecione</legend>
          <label>
            Nome funcionário:
            <select name=idFuncionario>
            <?php
              foreach($resultadoFunc as $funcionario):
              ?>
                <option value="<?= $funcionario['id_funcionario'] ?>">
                  <?= $funcionario['nome'] ?>
                </option>
            </select>
          <?php
            endforeach;
          ?>
        </label>
        <label>
            Nome cliente: 
            <select name=idCliente>
            <?php
              foreach($resultadoCli as $cliente):
            ?>
            <option value="<?= $cliente['id_cliente'] ?>">
              <?= $cliente['nome'] ?>
            </option>
            </select>
              <?php
              endforeach;
              ?>
          </label>
        <input type="submit" value="Enviar">
      </fieldset>

    
  
   


       



