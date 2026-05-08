<?php

// Configurações corrigidas
    $servername = "127.0.0.1:3308";// geralmente é localhost, mas se estiver usando uma porta diferente, especifique-a
    $username = "root";// nome de usuário do banco de dados
    $password = "";
    $database = "lojacosme"; // nome do banco de dados

    // ORDEM CORRETA: host, usuário, senha, banco
    $conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    echo "<div class= 'message-erro'>falha de conexão" . mysqli_connect_error() . "</div>";
    die();
}
