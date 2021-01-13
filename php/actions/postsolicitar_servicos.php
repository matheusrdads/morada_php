<?php

require_once "conexaodb.php";

if(isset($_POST['categoria']) && isset($_POST['descricao']) ){
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO `solicitar_servicos`( `categoria`, `descricao`) VALUES ( '$categoria','$descricao' )";
    $result = $conn->query($sql);

    if ($result){
        header("Location: ../../servicos.php");
    }
    else {
        echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
    };

?>