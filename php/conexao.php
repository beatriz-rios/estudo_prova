<?php

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
