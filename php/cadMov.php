<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Movimento</title>
</head>

<body>
    <h1>Cadastro de Movimento</h1>
    <ul>
        <li><a href="http://localhost/estudo_prova/php/cadProd.php">Cadastro de Produto</a></li> 
        <li><a href="http://localhost/estudo_prova/php/consultaTab.php">Consulta de Produto</a></li>
        <li><a href="http://localhost/estudo_prova/php/cadMov.php">Cadastro de Movimento</a></li>
        <li><a href="http://localhost/estudo_prova/php/menu.php">Menu</a></li>
    </ul>
    <form method="POST">

        <label for="mov">Movimento:</label>
        <input type="text" name="mov">

        <label for="cos">ID do Porduto Cosmético:</label>
        <input type="number" name="idcosme">

        <label for="quant">Quantidade:</label>
        <input type="number" name="quant">

        <input type="submit" value="Cadastrar">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mov = $_POST["mov"];
        $idcosm = $_POST["idcosme"];
        $quant = $_POST["quant"];


        
       
    $servername = "localhost";// geralmente é localhost/ 127.0.01:3308(no pc do senai)  mas se estiver usando uma porta diferente, especifique-a
    $username = "root";// nome de usuário do banco de dados
    $password = ""; 
    $database = "lojacosme";  // nome do banco de dados

    // ORDEM CORRETA: host, usuário, senha, banco
    $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            echo "<div class=message_error> Falha na conexão:" . mysqli_connect_error() . "</div>";
            die();
        }

        $sql = "INSERT INTO movimento(
    mov,
    cosmetico_idproduto,
    quant
    )VALUE(
    '$mov',
    '$idcosm',
    '$quant'
    )";

        if (mysqli_query($conn, $sql)) {
            echo "<div class=message_sucess> Movimento cadstrado com sucesso:</div>";
        } else {
            echo "<div class=message_error>" . $sql . mysqli_error($conn) . "</div>";
        }

        mysqli_close($conn);
    }


    ?>
</body>

</html>