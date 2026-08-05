<?php

function getConexao(){
  $dsn = "pgsql:host=localhost;port=5432;dbname=floricultura;";
$usuario = "postgres"; 
$senha = "123";



try {
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
    echo "Conectado ao PostgreSQL com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao conectar ao Postgres: " . $e->getMessage();
}

}
