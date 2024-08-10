<?php
$servername = "localhost";  
$username = "root";  
$password = "";    


try {
    // Cria uma conexão PDO
    $pdo = new PDO("mysql:host=$servername;dbname=blog_db", $username, $password);
    // Define o modo de erro PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida ao MySQL";
} catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}

// Fecha a conexão
$pdo = null;
?>