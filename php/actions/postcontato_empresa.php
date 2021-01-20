<?php

require_once "conexaodb.php";

if(isset($_POST['empresa']) && isset($_POST['email']) && isset($_POST['mensagem']) ){

    $empresa = $_POST['empresa'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
   
    $sql = "INSERT into `contato` (`empresa`, `email`, `mensagem`) values ('$empresa',' $email', '$mensagem');";
    
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