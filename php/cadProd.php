<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <h1>Cadastro de Produtos</h1>
    <ul>
        <li><a href="http://localhost/estudo_prova/php/cadProd.php">Cadastro de Produto</a></li> 
        <li><a href="http://localhost/estudo_prova/php/consultaTab.php">Consulta de Produto</a></li>
        <li><a href="http://localhost/estudo_prova/php/cadMov.php">Cadastro de Movimento</a></li>
        <li><a href="http://localhost/estudo_prova/php/menu.php">Menu</a></li>
    </ul>
    <form method="post">

        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="marca">Nome da Marca:</label>
        <input type="text" id="marca" name="marca" required>

        <label for="volume">Digite o volume do produto:</label>
        <input type="text" id="vol" name="vol" required>

        <label for="cor">Digite a cor do produto:</label>
        <input type="text" id="cor" name="cor" required>



        <input type="submit" value="Cadastrar">


    </form>
    <ul>
        <li><a href="http://localhost/estudo_prova/php/menu.php">Menu</a></li>
    </ul>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $vol = $_POST['vol'];
        $cor = $_POST['cor'];

    // Configurações corrigidas
    $servername = "localhost";
    $username = "root";
    $password = ""; // Removi o espaço, deve ser vazio
    $database = "lojacosme"; // Verifique se é lojaCosmi ou lojacosme (o MySQL costuma ser case-insensitive, mas é bom padronizar)

    // ORDEM CORRETA: host, usuário, senha, banco
    $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            echo "<div class= 'message-erro'>falha de conexão" . mysqli_connect_error() . "</div>";
            die();
        }

        $sql = "INSERT INTO cosmetico(
    nome,
    marca,
    volume,
    cor
    )VALUE(
    '$nome',
    '$marca',
    '$vol',
    '$cor'
    )";

        if (mysqli_query($conn, $sql)) {
            echo "<div class= 'message_sucesso'> Produto cadastrado com sucesso.</div>";
        } else {
            echo "<div class= 'message-erro'>" . $sql . "<br>" .  mysqli_error($conn) . "</div>";
        }

        mysqli_close($conn);
    }

    ?>
</body>

</html>