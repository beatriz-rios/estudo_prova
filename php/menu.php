<?php
session_start(); // 1. Avisa o PHP que vamos usar a "memória"

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == "Bia" && $senha == "123") {
        // 2. Guarda o nome na "gaveta" do servidor chamada SESSION
        $_SESSION['usuarioLogado'] = $usuario;
        
        header("Location: menu.php"); // Redireciona
        exit();
    } else {
        echo "Usuário ou senha errados!";
    }
}
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuarioLogado']; ?>!</h1>
    <button onclick="sair()">Sair</button>
    <script src="../js/logout.js"></script>
</body>
</html>