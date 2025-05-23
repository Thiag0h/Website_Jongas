<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/StyleCadastro.css">
<link rel="icon" href="Imagens/JongasLogo16x16.ico">
</head>
<body>
<main>
<section class="form-container">
    <h2>Cadastrar Produto</h2>
    <form action="salvar.php" method="POST" enctype="multipart/form-data">
        <label>Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label>Imagem:</label><br>
        <input type="file" id="imagem" name="imagem" accept="image/*"><br><br>

        <label>Descrição:</label><br>
        <textarea id="descricao" name="descricao"></textarea><br><br>

        <input type="submit" class="submit-btn" value="Salvar Produto">
    </form>
    </section>        
    </main>
</body>
</html>
