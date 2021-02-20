<?php

session_start();
require_once "conexaodb.php";
$email = $_SESSION['email'];

if (isset($_POST['nome']) && isset($_POST['cep']) && isset($_POST['endereco']) && isset($_POST['sobrenome']) && isset($_POST['bairro']) && isset($_POST['complemento']) && isset($_POST['telefone']) && isset($_POST['sobre'])) {

    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $sobrenome = $_POST['sobrenome'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['telefone'];
    $sobre = $_POST['sobre'];

    $sql = " UPDATE  usuarios SET nome = '$nome', cep = $cep, endereco = '$endereco', sobrenome = '$sobrenome', bairro = '$bairro', complemento = '$complemento', telefone = '$telefone', sobre = '$sobre'  WHERE email = '$email' ;";

    $result = $conn->query($sql);

    if ($result == true) {

        header("Location: ../../perfil.php");
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    } else {
        echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
};
