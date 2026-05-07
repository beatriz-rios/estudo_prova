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
    <title>Login</title>
</head>
<body>
    <h1>Página de Login</h1>
    <form method="post">

    <label >Usuário:</label>
    <input type="text" name="usuario" required>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" required>

    <input type="submit" value="Login">
    </form>

    
   
</body>
</html>