<?php
    $conn = mysqli_connect("localhost", "root", "", "saep_db");

    // 2. PEGA O ID DA URL (ex: editarProduto.php?id=5)
    $id = $_GET['id'];

    // 3. BUSCA OS DADOS DO PRODUTO NO BANCO
    $sql = "UPDATE * FROM cosmetico WHERE idproduto = '$id'";
    $resultado = mysqli_query($conn, $sql);
    ?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <h1>Editar Produto: <?php echo $produto['nome']; ?></h1>

    <form method="POST">
        <label>Nome do Produto:</label>
        <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" required>
        
        <br><br>
        <button type="submit">Salvar Alterações</button>
        <a href="consultaTabela.php">Cancelar</a>
</form>
    
</body>
</html>