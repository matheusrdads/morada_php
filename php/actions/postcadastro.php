<?php

require_once "conexaodb.php";

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) ){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into usuario (nome, email, senha) values ('$nome', '$email', '$senha');";
    $result = $conn->query($sql);

    if ($result){
        header("Location: ../../index.php");
    }
    else {
        echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
    };

?>