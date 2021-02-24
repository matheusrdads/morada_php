<?php

session_start();
require_once "conexaodb.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


if (isset($_POST['editar'])) {

    $editar = $_POST['editar'];


    $sql = " UPDATE servicos SET descricao = '$editar' WHERE idservicos = '$id' ;";


    $result = $conn->query($sql);


    if ($result == true) {

        header("Location: ../../perfil.php");
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    } else {
        echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
};
