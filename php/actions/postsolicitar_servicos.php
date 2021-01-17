<?php
session_start();

require_once "conexaodb.php";
require "exibeDados.php";

$id = $row['idusuario'];

if(isset($_POST['categoria']) && isset($_POST['descricao']) ){
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO `servicos`( `idusuario`, `tipo`, `categoria`, `descricao` ) VALUES ( '$id', 'solicitando', '$categoria', '$descricao' )";
    $resultado = $conn->query($sql);

    if ($resultado){
        echo "<script>alert('Solicitação feita com sucesso!');</script>";
        header("Location: ../../servicos.php");
    }
    else {
        echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
    };

    
?>