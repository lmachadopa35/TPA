<?php
$host = 'localhost';
$dbname = 'cotemig_fit_3c1';
$username = 'root';
$password = ''; // Insira sua senha aqui, se houver

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
