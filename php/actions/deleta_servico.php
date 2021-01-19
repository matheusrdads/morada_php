<?php 
    session_start();
    include('./conexaodb.php');
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $query = "DELETE FROM servicos WHERE idservicos = '$id'";
    $result = $conn->query($query);

    if($del == true){
        header("Loacation: ../../perfil.php");
    }else{
        header("Location: ../../perfil.php");
    }