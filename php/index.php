<?php
session_start(); // 1. Ativa a memória do servidor

if ($_POST) {
    $u = $_POST['u'];
    $s = $_POST['s'];

    if ($u == "Admin" && $s == "123") {
        $_SESSION['usuario'] = $u; // 2. Guarda o nome na gaveta
        header("Location: menu.php"); // 3. Vai para o menu
    } else {
        echo "Erro!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <h1>Página de Login</h1>
    <input name="u" placeholder="Usuário" required>
    <input name="s" type="password" placeholder="Senha" required>
    <button>Entrar</button>
</form>
</body>
</html>
