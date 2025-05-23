<?php

// Informações de login
$host = "localhost";
$db = "CadastroProdutos";         
$user = "root";     
$pass = "";  

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM produtos ORDER BY id DESC";
$result = $conn->query($sql);

?>

