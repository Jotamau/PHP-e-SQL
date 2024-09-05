<?php
    $nome =  $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include "conecta.php";
    $sql = "INSERT INTO  usuario(nome, email, senha) values ('$nome', '$email', '$senha')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado > 0) {
        echo "Cadastrado com sucesso!";
    }




?>