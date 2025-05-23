<?php
$host = "localhost";
$db = "CadastroProdutos";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$imagem_nome = "";
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
    $imagem_nome = time() . "_" . basename($_FILES['imagem']['name']);
    $caminho = "uploads/" . $imagem_nome;
    move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
}

$sql = "INSERT INTO servicos (nome, imagem, descricao) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $imagem_nome, $descricao);

if ($stmt->execute()) {
    echo "serviço cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar serviço: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
