<?php
$db = mysqli_connect("localhost", "root", "", "lojacosme"); //  CONEXÃO

$id = $_GET['id']; //  PEGA O ID DO PRODUTO

mysqli_query($db, "DELETE FROM movimento WHERE cosmetico_idproduto = $id"); //  PRIMEIRO: Deleta as movimentações (a chave estrangeira)

mysqli_query($db, "DELETE FROM cosmetico WHERE idproduto = $id"); //  SEGUNDO: Deleta o produto

header("Location: consultaTab.php"); //  VOLTA PARA A TABELA
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