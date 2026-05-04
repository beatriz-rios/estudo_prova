<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
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

    <?php 
    if($_SERVER["REQUEST_METHO"]"POST){
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $vol = $_POST['vol'];
    $cor = $_POST['cor'];

    $database = "lojaCosmi";
    $password = "";
    $servername = "localhost";
    $username = "root";

$conn = mysqli_connect($database, $password, $servername, $username );
if(!conn){
echo"<div class= 'message-erro'>"falha de conecção" . mysqli_connect_error() . "</div>";
die();
}
sql = INSERT INTO cosmetico(
    )VALUES(
    
    );


    
    }

?>
</body>
</html>
