<?php

require_once "conexaodb.php";
session_start();

if ( isset($_POST['nome']) && isset($_POST['sobrenome']) && (isset($_POST['endereco']) &&
 isset($_POST['cep']) && isset($_POST['bairro']) && isset($_POST['complemento']) &&
 isset($_POST['telefone']) && isset($_POST['data_de_nascimento']) && isset($_POST['sobre'])))
 
 
 {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['telefone'];
    $data_de_nascimento = $_POST['data_de_nascimento'];
    $sobre = $_POST['sobre'];
   
    $sql = " UPDATE  usuario SET nome = '$nome', sobrenome = '$sobrenome', endereco = '$endereco', cep = $cep, bairro = '$bairro', 
    complemento  = '$complemento', telefone = $telefone, data_de_nascimento = $data_de_nascimento, sobre = '$sobre';";

    $result = $conn->query($sql);
    
    
    if ($result){
       echo "<script>alert('Mensagem enviada com sucesso!');</script>";
       header("Location: ../../perfil.php");
    }
    else {
        echo "<script>alert('Houve um erro ao enviar sua mensagem. Tente novamente mais tarde.);</script>";
    }
    };
?>