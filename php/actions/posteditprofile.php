<?php

session_start();
require_once "conexaodb.php";
$email = $_SESSION['email'];

if(isset($_POST['nome']) && isset($_POST['cep']) && isset($_POST['endereco']) && isset($_POST['sobrenome']) && isset($_POST['bairro']) && isset($_POST['complemento']) && isset($_POST['telefone']) && isset($_POST['sobre'])){

    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $sobrenome = $_POST['sobrenome'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['telefone'];
    $sobre = $_POST['sobre'];

    // $sql = "insert into usuarios (nome, cep, endereco) values ('$nome', '$cep', '$endereco') ;";
    // $result = $conn->query($sql);

    $sql = " UPDATE  usuarios SET nome = '$nome', cep = $cep, endereco = '$endereco', sobrenome = '$sobrenome', bairro = '$bairro', complemento = '$complemento', telefone = '$telefone', sobre = '$sobre'  WHERE email = '$email' ;";
    
    $result = $conn->query($sql);

    if ($result == true){
        
        header("Location: ../../perfil.php");
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";

    }
    else {
        echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
    };


// require_once "conexaodb.php";
// session_start();


// if ( isset($_POST['nome']) && isset($_POST['sobrenome']) && (isset($_POST['endereco']) &&
//  isset($_POST['cep']) && isset($_POST['bairro']) && isset($_POST['complemento']) &&
//  isset($_POST['telefone']) && isset($_POST['data_de_nascimento']) && isset($_POST['sobre'])))
 
 
//  {
//     $nome = $_POST['nome'];
//     $sobrenome = $_POST['sobrenome'];
//     $endereco = $_POST['endereco'];
//     $cep = $_POST['cep'];
//     $bairro = $_POST['bairro'];
//     $complemento = $_POST['complemento'];
//     $telefone = $_POST['telefone'];
//     $data_de_nascimento = $_POST['data_de_nascimento'];
//     $sobre = $_POST['sobre'];

//     $sql = "insert into usuarios (nome, sobrenome, endereco, cep, bairro, complemento, telefone, data_de_nascimento, sobre) values 
//     ('$nome', '$sobrenome', '$endereco', '$cep', '$bairro', '$complemento', '$telefone', '$data_de_nascimento', '$sobre');";
   
//     $sql = " UPDATE  usuarios SET nome = '$nome', sobrenome = '$sobrenome', endereco = '$endereco', cep = $cep, bairro = '$bairro', 
//     complemento  = '$complemento', telefone = $telefone, data_de_nascimento = $data_de_nascimento, sobre = '$sobre' WHERE email = '$_SESSION' ;";

//     $result = $conn->query($sql);
    
    
//     if ($result){
//        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
//        header("Location: ../../perfil.php");
//     }
//     else {
//         echo "<script>alert('Houve um erro ao enviar sua mensagem. Tente novamente mais tarde.);</script>";
//     }
//     };
?>