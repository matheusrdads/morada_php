<?php

session_start();
require_once "conexaodb.php";


$inicio = filter_input(INPUT_GET, 'inicio', FILTER_SANITIZE_NUMBER_INT);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


if($inicio == null){
$sql = "UPDATE servicos SET inicio = now() WHERE idservicos = '$id';";

$result = $conn->query($sql);


  echo ("<script>
        window.alert('Início do serviço registrado!')
        window.location.href='../../perfil.php';
    </script>");
  
} else {
  echo ("<script>
        window.alert('Início já registrado!')
        window.location.href='../../perfil.php';
    </script>");

}

