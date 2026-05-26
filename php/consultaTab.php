<!DOCTYPE html>
<html lang="pt-br">

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
    c.idproduto,                   -- Busca o campo ID do produto na tabela de cosméticos
    c.nome,                        -- Busca o campo nome do produto na tabela de cosméticos
    SUM(m.quant) as estoque_total  -- Soma as quantidades da tabela movimento e dá o nome de 'estoque_total'
    FROM cosmetico c                   -- Define que a tabela inicial da busca é 'cosmetico' (apelidada de 'c')
     INNER JOIN movimento m             -- Junta (cruza) os dados com a tabela 'movimento' (apelidada de 'm')
    ON c.idproduto = m.cosmetico_idproduto -- Regra de junção: o ID do cosmético deve ser igual ao ID guardado na movimentação
    WHERE c.idproduto                  -- Filtro (Nota: geralmente usado para filtrar um ID, ex: WHERE c.idproduto = 5)
    GROUP BY 
    c.idproduto, c.nome;";


    $servername = "localhost"; // geralmente é localhost/ 127.0.01:3308(no pc do senai)  mas se estiver usando uma porta diferente, especifique-a
    $username = "root"; // nome de usuário do banco de dados
    $password = "";
    $database = "lojacosme"; // nome do banco de dados

    $conn = mysqli_connect($servername, $username, $password, $database);


    echo "<table border='2'>";
    echo "<tr><th> ID </th><th>Produtos</th> <th> Estoque </th> <th> Ações </th></tr>";

    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row["idproduto"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["estoque_total"] . "</td>";
            echo "<td> <a href='editar.php?id=" . $row["idproduto"] . "'>Editar</a> |
             <a href='excluir.php?id=" . $row["idproduto"] . "'>Excluir</a> </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Erro na consulta: " . mysqli_error($conn) . "</td></tr>";
    }
    echo "</table>";

    ?>
</body>

</html>