<?php

session_start();
require_once "conexaodb.php";


$fim = filter_input(INPUT_GET, 'fim', FILTER_SANITIZE_NUMBER_INT);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


if($fim == null){
$sql = "UPDATE servicos SET fim = now() WHERE idservicos = '$id';";

$result = $conn->query($sql);


  echo ("<script>
        window.alert('Final do serviço registrado!')
        window.location.href='../../perfil.php';
    </script>");
  
} else {
  echo ("<script>
        window.alert('O final do serviço já foi registrado!')
        window.location.href='../../perfil.php';
    </script>");

}

