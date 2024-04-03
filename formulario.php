<?php
    var_dump($_POST);
    if(array_count_values($_POST) > 0){
        include_once("config.php");

        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $CPF = $_POST["CPF"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];
        $CEP = $_POST["CEP"];
        $cidade = $_POST["cidade"];
        $produtos = $_POST["produtos"];

        $result = mysqli_query($conexao, "INSERT INTO clientes(nome,telefone,CPF,email,endereco,CEP,cidade,produtos) VALUES ('$nome', '$telefone', '$CPF', '$email', '$CEP', '$endereco', '$cidade', '$produtos')");

    }
?> 