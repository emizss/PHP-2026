<?php


$dsn = "pgsql:host=localhost;port=5432;dbname=floricultura;";
$usuario = "postgres"; 
$senha = "123";



try {
    $db = new PDO($dsn, $usuario, $senha);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao PostgreSQL com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao conectar ao Postgres: " . $e->getMessage();
}


?>