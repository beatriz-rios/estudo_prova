<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>

<body>
    <h1>Tabela de cosulta</h1>
    <ul>
        <li><a href="http://localhost/estudo_prova/php/cadProd.php">Cadastro de Produto</a></li>
        <li><a href="http://localhost/estudo_prova/php/consultaTab.php">Consulta de Produto</a></li>
        <li><a href="http://localhost/estudo_prova/php/cadMov.php">Cadastro de Movimento</a></li>
        <li><a href="http://localhost/estudo_prova/php/menu.php">Menu</a></li>
    </ul>

    <?php
   $sql = "SELECT 
            c.idproduto, 
            c.nome, 
            SUM(m.quant) as estoque_total
        FROM cosmetico c
        INNER JOIN movimento m ON c.idproduto = m.cosmetico_idproduto
        WHERE c.idproduto
        GROUP BY c.idproduto, c.nome";

    $conn = mysqli_connect("localhost", "root", "", "lojacosme");


    echo "<table border='2'>";
    echo "<tr><th> ID </th><th>Produtos</th> <th> Estoque </th> <th> Ações </th></tr>";

    $resultado = mysqli_query($conn, $sql);

   if ($resultado) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row["idproduto"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["estoque_total"] . "</td>";
        echo "<td> <a href='http://localhost/estudo_prova/php/editar.php'>Editar</a> |
         <a href='#'>Excluir</a> </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Erro na consulta: " . mysqli_error($conn) . "</td></tr>";
}
    echo "</table>";

    ?>
</body>

</html>