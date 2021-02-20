<?php

session_start();
require_once "conexaodb.php";
$email = $_SESSION['email'];

if (isset($_POST['estrela'])) {

    $estrela = $_POST['estrela'];


    $sql = " UPDATE  usuarios SET estrela = '$nome'  WHERE email = '$email' ;";

    $result = $conn->query($sql);

    if ($result == true) {

        header("Location: ../../perfil.php");
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    } else {
        echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
};
