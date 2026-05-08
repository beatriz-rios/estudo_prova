        <?php
    $servername = "127.0.0.1:3308";// geralmente é localhost, mas se estiver usando uma porta diferente, especifique-a
        $username = "root"; // nome de usuário do banco de dados
        $password = "";
        $database = "lojacosme"; // nome do banco de dados

        // ORDEM CORRETA: host, usuário, senha, banco
        $conn = mysqli_connect($servername, $username, $password, $database);

        // 2. BUSCA (Para mostrar o nome atual no campo)
        $id = $_GET['id'];
        $sql = "SELECT * FROM cosmetico WHERE idproduto = $id";
        $res = mysqli_query($conn, $sql);
        $produto = mysqli_fetch_assoc($res);

        // 3. ATUALIZAÇÃO (Só acontece quando clica no botão)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $novoNome = $_POST['nome'];
            $update = "UPDATE cosmetico SET nome = '$novoNome' WHERE idproduto = $id";
            
            if (mysqli_query($conn, $update)) {
                header("Location: consultaTab.php");
                exit();
            }
        }
        ?>

        <!DOCTYPE html>
        <html>
        <body>
            <h2>Editar: <?php echo $produto['nome']; ?></h2>
            
            <form method="POST">
                <input type="text" name="nome" value="<?php echo $produto['nome']; ?>">
                <button type="submit">Salvar</button>
            </form>
        </body>
        </html>