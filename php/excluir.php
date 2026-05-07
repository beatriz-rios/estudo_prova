<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; // Removi o espaço, deve ser vazio
    $database = "lojacosme"; // Verifique se é lojaCosmi ou lojacosme (o MySQL costuma ser case-insensitive, mas é bom padronizar)

    // ORDEM CORRETA: host, usuário, senha, banco
    $conn = mysqli_connect($servername, $username, $password, $database);
    $conn = mysqli_connect("localhost", "root", "", "saep_db");

    // 2. PEGA O ID DA URL (ex: editarProduto.php?id=5)
    $id = $_GET['id'];

    // 3. BUSCA OS DADOS DO PRODUTO NO BANCO
    $sql = "DELETE * FROM produtos WHERE idprodutos = '$id'";
    $resultado = mysqli_query($conn, $sql);
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Produto</title>
</head>

<body>
    <h1>Exclusão</h1>
    
</body>

</html>