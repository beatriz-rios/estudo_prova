<?php
//Abre a porta de comunicação com o banco de dados (Host, User, Senha, Banco)
$db = mysqli_connect("localhost", "root", "", "lojacosme");

$id = $_GET['id']; //Pega o ID que foi enviado pelo link da tabela (ex: editar.php?id=5)

$res = mysqli_query($db, "SELECT * FROM cosmetico WHERE idproduto = $id"); //Faz uma busca no banco para encontrar o produto que tem esse ID específico

$prod = mysqli_fetch_assoc($res); //Converte o resultado do banco em uma lista (array) que o PHP consegue ler

if ($_POST) { //Verifica "Se o usuário clicou no botão de salvar" (se houve um envio de formulário)

    $nome = $_POST['nome']; //Pega o novo nome que o usuário digitou na caixinha de texto

    //Manda o banco de dados trocar (UPDATE) o nome antigo pelo novo onde o ID for igual
    mysqli_query($db, "UPDATE cosmetico SET nome='$nome' WHERE idproduto=$id");

    header("Location: consultaTab.php"); //Redireciona o navegador de volta para a tabela de consulta
}
?>

<form method="POST">
    <input type="text" name="nome" value="<?= $prod['nome'] ?>">
    <button>Salvar</button>
</form>