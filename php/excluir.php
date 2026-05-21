<?php
$db = mysqli_connect("localhost", "root", "", "lojacosme"); // 1 CONEXÃO

$id = $_GET['id']; // 2 PEGA O ID DO PRODUTO

mysqli_query($db, "DELETE FROM movimento WHERE cosmetico_idproduto = $id"); // 3 PRIMEIRO: Deleta as movimentações (a chave estrangeira)

mysqli_query($db, "DELETE FROM cosmetico WHERE idproduto = $id"); // 4 SEGUNDO: Deleta o produto

header("Location: consultaTab.php"); // 5 VOLTA PARA A TABELA
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