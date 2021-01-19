<?php
    include('./php/actions/conexaodb.php');

    $query = "SELECT * FROM usuarios JOIN servicos ON usuarios.idusuario = servicos.usuario  ORDER BY rand() LIMIT 6;";
    $result = mysqli_query($conn, $query);