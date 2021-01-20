<?php

include('./php/actions/conexaodb.php');

    $id = $_SESSION['idusuario'];    

    $query = "SELECT idservicos, tipo, categoria, descricao FROM usuarios JOIN servicos ON usuarios.idusuario = servicos.usuario WHERE idusuario = $id ; ";
    $result = mysqli_query($conn, $query);
    // $service = mysqli_fetch_assoc($result);

//    print_r($service);

   