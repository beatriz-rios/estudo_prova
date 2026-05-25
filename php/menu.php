<?php
session_start(); //Ativa a memória para ler o que foi guardado

// Se a gaveta estiver vazia, expulsa o utilizador
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
        <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>

  <ul>
        <li><a href="http://localhost/estudo_prova/php/cadProd.php">Cadastro de Produto</a></li> 
        <li><a href="http://localhost/estudo_prova/php/consultaTab.php">Consulta de Produto</a></li>
        <li><a href="http://localhost/estudo_prova/php/cadMov.php">Cadastro de Movimento</a></li>
        <li><a href="http://localhost/estudo_prova/php/menu.php">Menu</a></li>
    </ul>
     <button id="btn-logout" onclick="sair()">Sair</button>
      <script src="../js/logout.js"></script>
</body>
</html>
