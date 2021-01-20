<?php
session_start();
require_once "conexaodb.php";

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) ){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into usuarios (nome, email, senha) values ('$nome', '$email', md5('$senha'));";
    $result = $conn->query($sql);

    if ($result){
        $_SESSION['cadastrado'] = true;
        header("Location: ../../login.php");
    }
    else {
        echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
    };

?>