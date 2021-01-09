<?php

require_once "conexaodb.php";

if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['mensagem']) ){

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
   
    $sql = "INSERT into contato (nome, email, telefone, mensagem, sobrenome) values ('$nome', '$email', '$telefone', '$mensagem', '$sobrenome');";
    $result = $conn->query($sql);

    var_dump($result);
    
    if ($result){
       echo "<script>alert('Mensagem enviada com sucesso!');</script>";
       header("Location: ../../index.php");
    }
    else {
        echo "<script>alert('Houve um erro ao enviar sua mensagem. Tente novamente mais tarde.);</script>";
    }
    };
?>